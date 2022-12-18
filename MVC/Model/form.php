<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Order Food </title>
<?php include '../View/UI.php';?>
		</head> 
        <body> 
		<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#C0C0C0"> Restaurant Management System </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244">

				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> <br><br><br>	
				
			</div>
		</div>
	</section>
    
    <section id = "section1">
        <div class="col-md-10" style="text-align: center; font-size: 60px; color:#C0C0C0"> Order Food </div>
        <div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">

<form method="post">
  <label for="product">Product:</label>
  <select name="product">
    <?php

    $query = "SELECT food_id, name FROM menu";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
      $food_id = $row['food_id'];
      $name = $row['name'];
      echo "<option value='$food_id'>$name</option>";
    }
    ?>
  </select>
  <br>
  <label for="quantity">Quantity:</label>
  <input type="number" name="quantity" min="1">
  <br>
  <input type="submit" name="submit" value="Add to Order">
</form>

</section>
<?php include '../View/Footer.php';?>
  </body> 
</html>

