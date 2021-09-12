<?php
	include_once 'connection.php';
	$query="select * from table5";

	$result=mysqli_query($conn,$query);

	//$dataid = 1; utk display cell in monday

?>

<!DOCTYPE html>
<html lang="en">

	<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>3C5</title>
    <style type="text/css">
    	td:hover:empty {
		  background-color: #ff0000;
		  color: #000000;
		}

    #container{width:100%; background-color: #9D9999;}
    #left{float: left; margin-left: 5%; margin-top: 16px; width:100px; }
    #right{float:right; margin-right: 5%; margin-top: 30px; width:100px;}
    #center{margin: auto; width:40%; text-align: center;}

    </style>
  </head>
  <body>
    
    <table class="table table-hover table-bordered table-dark text-center">
      
      <div id="container">
        <div id="left"><img align="top" style="width:90px;height:70px;" src="img/unimy.png"></div>
        <div id="right"><button type="button" class="btn btn-primary">BOOK</button></div>
        <div id="center">
            <b style="font-size: 40px">3C - 5 Schedule</b>
            <br>
              <a style="font-size: 25px">Date : 
              <?php $date1 = date("d/m/Y");
                $date= date("m/d/Y"); 
                $dayOfWeek= date("l",strtotime($date));
                echo $date1."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Day : ".$dayOfWeek;
              ?>
              </a>
        </div>
      </div>

      <!--
      <thead>
        <tr>
          <th colspan="20" height="50">
	          	<div class="col text-right">
			    <button type="button" class="btn btn-primary">BOOK</button>
			    </div>
          	<h2>3C - 5 Schedule</h2>
          		<b>Date : 
          		<?php $date1 = date("d/m/Y");
          			$date= date("m/d/Y"); 
          			$dayOfWeek= date("l",strtotime($date));
          			echo $date1."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	Day : ".$dayOfWeek;
          		?></b>
          </th>
          
        </tr>
      -->
    <t>
      <th width="220" scope="col"> Time </th>
      <th width="150" scope="col"> Monday </th>
      <th width="150" scope="col"> Tuesday </th>
      <th width="150" scope="col"> Wednesday </th>
      <th width="150" scope="col"> Thursday </th>
      <th width="150" scope="col"> Friday </th>
     </t>

     <?php
     	while ($rows=mysqli_fetch_assoc($result)) {
    ?> 	
    	<tr>
    		<td><?php echo $rows['Time']; ?></td>
    		<td><?php echo $rows['Monday']; ?></td>
    		<td><?php echo $rows['Tuesday']; ?></td>
    		<td><?php echo $rows['Wednesday']; ?></td>
    		<td><?php echo $rows['Thursday']; ?></td>
    		<td><?php echo $rows['Friday']; ?></td>
    	</tr>
    <?php
     	}
    ?>

       </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>