<?php

	include("db.php");

	

	if (isset($_POST['name'])) {
		
		// $name 			= validate($_POST['name']);
		 $class 			= validate($_POST['class']);
		// $purpose 		= validate($_POST['purpose']);
		// $lecturer 		= validate($_POST['lecturer']);
		// $pax	 		= validate($_POST['pax']);
		$description 	= validate($_POST['description']);
		// $datep 			= $_POST['datep'];

		// $date=date('y-m-d');
		
		
		$InsertData = $db->query("INSERT INTO book (name,class,purpose,lecturer, pax,description,datep,date) VALUES ('$name','$class','$purpose','$lecturer','$pax','$description','$datep','$date') ");
		$last_id = $db->insert_id;

		$photoName = $_FILES['photo']['name'];
		$path = "upload/book/".$last_id;

		if(!file_exists($path)){
			mkdir($path);
		}

		$database_path = $path.'/'.$photoName;
		if(move_uploaded_file($_FILES['photo']['tmp_name'],$path.'/'.$photoName)){
			$db->query("UPDATE book SET photo = '$database_path' WHERE id='$last_id' LIMIT 1");
		}

		if($InsertData){
			header("location:add_book.php?saved");
			exit();
		}else{
			header("location:add_book.php?error");
			exit();
		}
	}
	else{
		header("location:add_book.php?fillerror");
			exit();
	}


	function validate($input){
			$input_result = htmlspecialchars(stripslashes(trim($input)));
			return $input_result;
		}
?>