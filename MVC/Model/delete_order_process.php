<?php
require_once("dbconnect.php");

if(isset($_POST['orders'])){
	$a = $_POST['orders'];
	
	$sql = "DELETE FROM orders WHERE order_id = $a";
	
	$result = mysqli_query($conn, $sql);
	
	if($conn->query($sql)=== True){
		header('Location: ../Controller/delete_order.php');
	}
	else{
		echo "Deletion Failed";
	}
}



?>
