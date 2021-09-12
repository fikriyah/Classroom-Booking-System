

	<?php include("db.php");  ?>


	<?php

		$id = $_GET['id'];
		


		$sql = "DELETE FROM book WHERE id=$id";

		if ($db->query($sql) === TRUE) {
		    header("location:edit_book.php?delete");
			exit();
		} else {
		    header("location:edit_book.php?error");
			exit();
		}



	?>



	<?php include("script.php");  ?>