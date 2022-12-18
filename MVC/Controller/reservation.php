<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Reservation </title>
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
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#C0C0C0"> Add Reservation </div>
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
		
		<form action='../Model/reservation_process.php' class="form_design" method="post">
			Table Number: <select name="table">
				<option value= "1"> 1 </option>
				<option value= "2"> 2 </option>
				<option value= "3"> 3 </option>
				<option value= "4"> 4 </option>
				<option value= "5"> 5 </option>
				<option value= "6"> 6 </option>
				<option value= "7"> 7 </option>
				<option value= "8"> 8 </option>
				<option value= "9"> 9 </option>
				<option value= "10"> 10 </option>
			</select> <br/> 

			Date: <input type="date" name="date"> <br/> 
			Start Time: <input type="time" name="stime"> <br/>
			End Time: <input type="time" name="etime"> <br/>
			Name: <input type="text" name="name"> <br/>
			Contact: <input type="text" name="cont"> <br/>
			
			<br/>
			
			<button type="submit" value="Add"> Book </button>
			</div>
			
		</form>
	</section>

<?php include '../View/Footer.php';?>
  </body> 
</html>

