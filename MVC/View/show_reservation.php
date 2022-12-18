<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Reservation </title>
<?php include "UI.php";?>
		</head>

  <body> 

     
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#C0C0C0"> Restaurant Management System </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				
				<a href='../Controller/home.php' style="margin-left: 20px;"> Sign Out </a> 	<br><br><br>
				 
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#C0C0C0"> Reservation </div>
		<div style="margin-left:10%; margin-right:50%; margin-top:50px; margin-bottom:50px;opacity: 0.7;text-align:center;background:#21fbab;">
			<div class="row" style="padding:5px;"> </div>	
	
	<div class="row" style="padding:20px;">
	<div class="col-md-10" style="text-align: center; font-size: 18px; color:#0d0f0e">
<?php

require_once('../Model/dbconnect.php');

echo '<table>';
echo '<tr><th>Table No</th><th>Date</th><th>Start Time</th><th>End Time</th><th>Name</th><th>Contact</th></tr>';

	$sql = "SELECT * FROM reservation_table ";  
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0 )
	{
	  while($row = mysqli_fetch_array($result))
	  {
		echo '<tr>';
		echo '<td>' . $row[0] . '</td>';
		echo '<td>' . $row[1] . '</td>';
		echo '<td>' . $row[2] . '</td>';
		echo '<td>' . $row[3] . '</td>';
		echo '<td>' . $row[4] . '</td>';
		echo '<td>' . $row[5] . '</td>';
		echo '</tr>';
	  }
	  }
	
	else{
		echo "No Reservation Found";
	}
	

?>
	</div>
	</div>
	</section>
	
<?php include "Footer.php";?>
  </body> 
</html>

