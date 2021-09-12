<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("db.php");  ?>
	<?php $title = "Edit Booking"; include("head.php"); ?>


	<?php
	if(isset($_GET['id']) and !empty($_GET['id'])){
		$id = $_GET['id'];
		

		$sql = " SELECT * FROM book WHERE id = '$id'";
		$result = $db->query($sql);


		while($row = mysqli_fetch_assoc($result)) {
			

			$name 					= $row['name'];
        	$class					= $row["class"];
        	$purpose				= $row["purpose"];
        	$lecturer				= $row["lecturer"];
        	$pax					= $row["pax"];
        	$description			= $row["description"];
        	$datep					= $row["datep"];
		
 			
		}

	}else{
		header("location:add_book.php");
	}

	?>
</head>
<body>

	<?php include("header.php");  ?>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<?php $menu = "book"; $submenu = "editbook"; include("sidebar.php");  ?>
				</div><!--/.span3-->
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3><i class="fa fa-book "></i> Edit Book </h3>
							</div>
							<div class="module-body">

									<?php include("message.php");  ?>
									
									<form class="form-horizontal row-fluid" action="edited_book.php" method="post" enctype="multipart/form-data">
										
										
										<input type="hidden" name="id" value='<?php echo $id; ?>'>

										<div class="control-group">
											<label class="control-label" for="name">Name<span class="stars">*</span></label>
											<div class="controls">
												<input type="text" name="name" value='<?php echo $name; ?>' id="name" required placeholder="Type your full name" class="span8">
											</div>
										</div>

										
										<div class="control-group">
											<label class="control-label" for="class">Class<span class="stars">*</span></label>
											<div class="controls">
												<input type="text" name="class" value='<?php echo "$class" ?>' id="class" required placeholder="Type new class" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="purpose">Purpose<span class="stars">*</span></label>
											<div class="controls">
												<input type="text" name="purpose"value='<?php echo "$purpose" ?>' id="purpose" required placeholder="Type Purpose" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="lecturer">Person In Charge/Lecturer<span class="stars">*</span></label>
											<div class="controls">
												<input type="text" name="lecturer" value='<?php echo "$lecturer" ?>' id="lecturer" required placeholder="Type person in charge / lecurer" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="pax">Total Pax<span class="stars">*</span></label>
											<div class="controls">
												<input type="text" name="pax" value='<?php echo "$pax" ?>' id="pax" required placeholder="Type number of pax" class="span8">
											</div>
										</div>
									
										<div class="control-group">
											<label class="control-label" for="datep">Date of Reservation<span class="stars">*</span></label>
											<div class="controls">
												<input type="Date" name="datep" id="datep" value='<?php echo "$datep" ?>' class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="description">Description</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="description" value='<?php echo "$description" ?>' id="description"></textarea>
											</div>
										</div>
									
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-primary"><i class="fa fa-book"></i> Edit Book</button>
												<a href="edit_book.php"><button type="button" class="btn btn-danger"><i class="fa fa-times"></i> Cancel </button></a>
											</div>
										</div>
									</form>
							</div>
						</div>
						<br><br><Br><br><br><Br>
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
	<?php include("footer.php");  ?>
	<?php include("script.php");  ?>
</body>