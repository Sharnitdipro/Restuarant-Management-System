<?php
require_once('dbconnect.php');

if(isset($_POST['stat']) && isset($_POST['employee_id']))
{	
	$a = $_POST['stat'];
	$b = $_POST['employee_id'];
	
	$sql = " UPDATE assign_employee SET s_status = '$a' WHERE employee_id = $b ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){

		header('Location: ../Controller/update_salary.php');
	}
	else{
		echo "Updated Failed";
	}
	
}


?>