<?php
require_once('dbconnect.php');

if(isset($_POST['stat']) && isset($_POST['order_id']))
{	
	$a = $_POST['stat'];
	$b = $_POST['order_id'];
	
	$sql = " UPDATE orders SET o_status = '$a' WHERE order_id = $b ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){

		header('Location: ../Controller/update_order.php');
	}
	else{
		echo "Updated Failed";
	}
	
}


?>