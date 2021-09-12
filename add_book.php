<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("db.php");  ?>
	<?php $title = "Add New Booking"; include("head.php");?>
</head>
<body>

	<?php include("header.php");  ?>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<?php $menu = "book"; $submenu = "addbook"; include("sidebar.php");  ?>
				</div><!--/.span3-->
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3><i class="fa fa-users"></i> Add New Booking</h3>
							</div>
							<div class="module-body">

									<?php include("message.php");  ?>
									<form class="form-horizontal row-fluid" action="add_book_db.php" method="post" enctype="multipart/form-data">
										
										<?php $classname = $_GET['classname'];  ?>
										<?php $username = $_GET['username']; ?>

										<div class="control-group">
											<label class="control-label" for="name">Name<span class="stars">*</span></label>
											<div class="controls">
												<input type="text" name="name" id="name" class="span8" value= <?php echo $username; ?>>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="class">Class<span class="stars">*</span></label>
											<div class="controls">
												<input type="text" name="class" id="class" class="span8" value= <?php echo $classname; ?> >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="purpose">Purpose<span class="stars">*</span></label>
											<div class="controls">
												<input type="text" name="purpose" id="purpose" required placeholder="Type the purpose" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="lecturer">Person In Charge/Lecturer<span class="stars">*</span></label>
											<div class="controls">
												<input type="text" name="lecturer" id="lecturer" required placeholder="Type the person incharge/lecturer" class="span8">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="pax">Total Pax<span class="stars">*</span></label>
											<div class="controls">
												<input type="text" name="pax" id="pax" required placeholder="Type total pax" class="span8">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="datep">Date of Reservation<span class="stars">*</span></label>
											<div class="controls">
												<input type="Date" name="datep" id="datep" required class="span8">
											</div>
										</div>
										

										<div class="control-group">
											<label class="control-label" for="description">Description</label>
											<div class="controls">
												<textarea class="span8" rows="5" name="description" id="description"></textarea>
											</div>
										</div>
										
										<!-- <div class="control-group">
											<label class="control-label" for="photo">Book Picture</label>
											<div class="controls">
												<input type="file" name="photo" id="photo" required placeholder="type your full name" class="span8">
											</div>
										</div> -->

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-success"><i class="fa fa-book"></i> Add Booking</button>
												<button type="Reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset </button>
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
	<!--<script type="text/javascript">
		function getDepartament(faculty) {


			$.ajax({
				method:"post",
				url:"ajax_getDepartament.php",
				data:{faculty:faculty},

				success:function(data){
					$("#dep").slideDown();
					$("#department").html(data);
				}
			});


		}
	</script>-->
</body>