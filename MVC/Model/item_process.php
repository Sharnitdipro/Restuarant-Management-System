<?php
require_once('dbconnect.php');

if(isset($_POST['cat']) && isset($_POST['name']) && isset($_POST['price']))
{	
	$a = $_POST['cat'];
	$b = $_POST['name'];
	$c = $_POST['price'];
	
	$sql = " INSERT INTO menu VALUES( FLOOR(RAND()*(20-10+1))+100, '$a', '$b', '$c') ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		header('Location: ../Controller/add_item.php');
	}
	else{
		echo "Added Failed";
	}
	
}
?>