<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Add Employee </title>
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
<div class="col-md-10" style="text-align: center; font-size: 60px; color:#C0C0C0"> Add Employee </div>

<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
		
		<form action='../Model/employee_process.php' class="form_design" method="post">

			Name: <input type="text" name="name"> <br/> 
			Contact: <input type="number" name="cont"> <br/>
			Email: <input type="email" name="email"> <br/>
			Address: <input type="text" name="address"> <br/>
			Salary: <input type="number" name="salary"> <br/>

			<br/>
			
			<button type="submit" value="Add"> Add</button>
			</div>
			
		</form>
	</section>

<?php include '../View/Footer.php';?>
  </body> 
</html>

