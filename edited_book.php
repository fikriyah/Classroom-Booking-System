<?php

	include("db.php");

	

	if (isset($_POST['name'])) {
		
			$id 				= $_POST['id'];
			$name 				= $_POST['name'];
        	$class				= $_POST['class'];
        	$purpose			= $_POST['purpose'];
        	$lecturer			= $_POST['lecturer'];
        	$pax				= $_POST['pax'];
        	$description		= $_POST['description'];
        	$datep				= $_POST['datep'];
	
		$InsertData = $db->query("UPDATE book SET name='$name',class='$class',purpose='$purpose',lecturer='$lecturer',pax='$pax',description='$description',datep='$datep' WHERE id='$id' ");
	

	
		if($InsertData){
			header("location:edit_book.php?saved");
			exit();
		}else{
			header("location:edit_book.php?error");
			exit();
		}
	}
	else{
		header("location:edit_book.php?fillerror");
			exit();
	}


	function validate($input){
			$input_result = htmlspecialchars(stripslashes(trim($input)));
			return $input_result;
		}
?>