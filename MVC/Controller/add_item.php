<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Add Food Item </title>
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
<div class="col-md-10" style="text-align: center; font-size: 60px; color:#C0C0C0"> Add Food Item </div>
		
			
			<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
		
		<form action='../Model/item_process.php' class="form_design" method="post">
			Category: <select name="cat">
				<option value= "Burgers"> Burgers </option>
				<option value= "Sides"> Sides </option>
				<option value= "Pankha Wings"> Pankha Wings </option>
				<option value= "Fish Sections"> Fish Sections </option>
				<option value= "Naga Drums"> Naga Drums </option>
				<option value= "Shakes"> Shakes </option>
				<option value= "Soft Drinks"> Soft Drinks </option>
			</select> <br/> 
			Name: <input type="text" name="name"> <br/> 
			Price: <input type="number" name="price"> <br/>			
			<br/>
			
			<button type="submit" value="Add"> Add</button>
			</div>
			
		</form>
	</section>

<?php include '../View/Footer.php';?>
  </body> 
</html>

