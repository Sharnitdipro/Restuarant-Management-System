<?php

require_once('../Model/dbconnect.php');

$sql = " SELECT * FROM reservation_table" ;
$order_list = mysqli_query ($conn, $sql);			
?>  

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Delete Resevation </title>
<?php include '../View/UI.php';?>
		</head>
  
	<body>
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#C0C0C0"> Restaurant Management System </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244">

				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> 	<br><br><br>
				 
			</div>
		</div>
	</section>  
	
	
	<section id = "section1">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#C0C0C0"> Delete Resevation </div>
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
		<form action='../Model/delete_reservation_process.php' class="form_design" method="post">
			Table Number:
			<select name="table">
			<?php
				while ($category = mysqli_fetch_array(
						$order_list,MYSQLI_ASSOC)):;
			?>
				<option value="<?php echo $category["table_no"];?>"><?php echo $category["table_no"];
					?>
				</option>
			<?php
				endwhile;
			?>
			</select>
			<br/>
			<button type="submit" value="Delete"> Delete </button>
			</div>
		</form>
	</section>


<?php include '../View/Footer.php';?>
  </body> 
</html>

