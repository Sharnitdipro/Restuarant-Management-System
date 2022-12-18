<?php
require_once('dbconnect.php');


if(isset($_POST['name']) && isset($_POST['cont']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['salary']))
{	
	$a = $_POST['name'];
	$b = $_POST['cont'];
	$c = $_POST['email'];
	$d = $_POST['address'];
	$e = $_POST['salary'];
	$f = date('M Y');

	
	$sql = " INSERT INTO employee_info VALUES( FLOOR(RAND()*(20-10+1))+10000, '$a', '$b', '$c', '$d', '$e', '$f') ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		header('Location: ../Controller/add_employee.php');
	}
	else{
		echo "Added Failed";
	}
	
}
?>