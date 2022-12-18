<?php
require_once('dbconnect.php');


if(isset($_POST['employee_id']) && isset($_POST['date']) && isset($_POST['stime']) && isset($_POST['etime']))
{	
	$a = $_POST['employee_id'];
	$b = $_POST['date'];
	$c = $_POST['stime'];
	$d = $_POST['etime'];
	
	$sql = " INSERT INTO worksheet VALUES( '$a', '$b', '$c', '$d') ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		header('Location: ../Controller/add_employee_worksheet.php');
	}
	else{
		echo "Added Failed";
	}
	
}
?>