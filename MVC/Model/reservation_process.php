<?php
require_once('dbconnect.php');

if(isset($_POST['table']) && isset($_POST['date']) && isset($_POST['stime']) && isset($_POST['etime']) && isset($_POST['name']) && isset($_POST['cont']))
{	
	$a = $_POST['table'];
	$b = $_POST['date'];
	$c = $_POST['stime'];
	$d = $_POST['etime'];
	$e = $_POST['name'];
	$f = $_POST['cont'];
	
	$sql = " INSERT INTO reservation_table VALUES( '$a', '$b', '$c', '$d', '$e', '$f') ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		echo "Added Successfully";
		header('Location: ../Controller/reservation.php');
	}
	else{
		echo "Added Failed";
	}
	
}


?>