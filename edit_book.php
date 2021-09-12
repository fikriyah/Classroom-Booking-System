<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("db.php");  ?>
	<?php $title = "Edit Booking"; include("head.php"); ?>
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
								<h3><i class="fa fa-book"></i> Edit Booking</h3>
							</div>
							<div class="module-body">

							<?php include("message.php");  ?>
																	
							
							<!--  -->

							<div class="module">
							
							<div class="module-body table">

								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Name</th>
											<th>Class</th>
											<th>Purpose</th>
											<th>Total Pax</th>
											<th>Person In Charge/Lecturer</th>
											<th>Description</th>										
											<th>Date of Reservation</th>
											
										</tr>
									</thead>
									<tbody>
										
											<?php

												$sql = "SELECT id, name, class,purpose ,lecturer,pax, description , datep, date FROM book";
												$result = $db->query($sql);
													$counter=1;
												    while($row = $result->fetch_assoc()) {
												    
												    $id = $row["id"];

												        echo "<tr class='odd gradeX'>
												        	<td>" . $counter++ . "</td>
												        	<td>" . $row["name"]. "</td>
												        	<td>" . $row["class"]. "</td>
												        	<td>" . $row["purpose"]. "</td>
												        	<td>" . $row["lecturer"]. "</td>
												        	<td>" . $row["pax"]. "</td>
												        	<td>" . $row["description"]. "</td>
												        	<td>" . $row["datep"]. "</td>
												        	
												        	
												        	<td>". '<a href="edit_book_db.php?id='.$id.'"><input type="button" name="edit" value="Edit" class="btn btn-primary"></a><a href="delete_book.php?id='.$id.'"> <input type="button" name="delete" value="Delete" class="btn btn-danger"></a>'. "</td>
												        </tr>";

												    }
												
											?>
										</tr>
										
									</tbody>
									
								</table>
							</div>
						</div><!--/.module-->
						<!--  -->


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