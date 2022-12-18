<?php

require_once('../Model/dbconnect.php');

$sql = " SELECT * FROM employee_info" ;
$order_list = mysqli_query ($conn, $sql);			
?>  

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Assign Employee </title>
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
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#C0C0C0"> Assign Employee </div>
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
		
		<form action='../Model/assign_employee_process.php' class="form_design" method="post">
			

			Employee ID: <select name="employee_id">
            <?php
                while ($category = mysqli_fetch_array(
                        $order_list,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["employee_id"];?>"><?php echo $category["employee_id"];
                    ?>
                </option>
            <?php
                endwhile;
            ?>
			
			</select>
			<br/>
			Month Year: <input type="text" name="month"> <br/>
		<button type="submit" value="Update"> Add </button>
		
		</div>
		</form>
	</section>


<?php include '../View/Footer.php';?>
  </body> 
</html>

