<?php
	include("db.php");
	if (isset($_POST['faculty'])) {
		$faculty = $_POST['faculty'];
		$getDepartament = $db->query("SELECT * FROM department WHERE faculty='$faculty'");
		echo '<option value="">select one</option>';
		while ($row = $getDepartament->fetch_array()) {
			echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
		}

	}

?>