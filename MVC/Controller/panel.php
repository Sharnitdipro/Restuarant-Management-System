<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Panel </title>
		<?php include '../View/UI.php';?>
		</head>
  <body>

	
  	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#C0C0C0"> Restaurant Management System </div>
			<div class="col-md-10" style="text-align: center;font-size: 30px; color:#C0C0C0"> 
				
                <a href="reservation.php" style="margin-left: 20px; color:#efedf1"> Reservation </a>
				<a href="add_item.php" style="margin-left: 20px; color:#efedf1"> Add Food Item </a>
				<a href="add_employee.php" style="margin-left: 20px; color:#efedf1"> Add Employee </a>
				<a href="assign_employee.php" style="margin-left: 20px; color:#efedf1"> Assign Employee</a> <br>
				
				
				<a href="update_salary.php" style="margin-left: 20px; color:#efedf1"> Update Salary Status </a> 
				<a href="add_employee_worksheet.php" style="margin-left: 20px; color:#efedf1"> Add Employee Worksheet </a> 
				<a href='../View/show_reservation.php' style="margin-left: 20px; color:#efedf1"> Show Reservation </a> <br>

				<a href='../View/show_menu.php' style="margin-left: 20px; color:#efedf1"> Show Menu</a>
				<a href='../View/show_employee.php' style="margin-left: 20px; color:#efedf1"> Employee Info</a>
				<a href='../View/show_sstatus.php' style="margin-left: 20px; color:#efedf1"> Check Employee Salary Status</a>
				<a href='../View/show_worksheet.php' style="margin-left: 20px; color:#efedf1"> Worksheet</a> <br>

				<a href="delete_reservation.php" style="margin-left: 20px; color:#efedf1"> Delete Reservation</a>
				<a href='../Model/order.php' style="margin-left: 20px; color:#efedf1"> Order</a>
				<a href="update_order.php" style="margin-left: 20px; color:#efedf1"> Update Order</a>
				<a href="delete_order.php" style="margin-left: 20px; color:#efedf1"> Delete Order</a> <br>

				<a href='../View/show_order.php' style="margin-left: 20px; color:#efedf1"> Show Order</a>
				<a href='../Model/tax.php' style="margin-left: 20px; color:#efedf1"> Tax</a>
				<a href='../Model/stat.php' style="margin-left: 20px; color:#efedf1"> Database Statistics </a>
				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> 	<br><br>
				 
				 
			</div>
		</div>
	</section>

	<?php include '../View/Footer.php';?>
</body>
</html>