<?php

require_once('dbconnect.php');


if(isset($_POST['fname']) && isset($_POST['pass'])){
	
	$u = $_POST['fname'];
	$p = $_POST['pass'];

	$sql = "SELECT * FROM admin_info WHERE user_name = '$u' AND pass = '$p' ";
	
	$result = mysqli_query($conn, $sql);
	
    if(mysqli_num_rows($result) !=0 ){
		header('Location: ../Controller/panel.php');
	}

	else{
		echo "Username or Password is wrong";
		
	}
	
}
?>
