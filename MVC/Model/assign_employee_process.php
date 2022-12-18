<?php
require_once('dbconnect.php');

if(isset($_POST['employee_id']) && isset($_POST['month']))
{	
	$a = $_POST['employee_id'];
	$b = $_POST['month'];
	$c = "Unpaid";
	
	$sql = " INSERT INTO assign_employee VALUES ('$a', '$b', '$c') ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){

		header('Location: ../Controller/assign_employee.php');
	}
	else{
		echo "Updated Failed";
	}
	
}


?>