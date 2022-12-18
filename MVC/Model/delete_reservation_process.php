<?php
require_once("dbconnect.php");

if(isset($_POST['table'])){
	$a = $_POST['table'];
	
	$sql = "DELETE FROM reservation_table WHERE table_no = $a";
	
	$result = mysqli_query($conn, $sql);
	
	if($conn->query($sql)=== True){
		header('Location: ../Controller/delete_reservation.php');
	}
	else{
		echo "Deletion Failed";
	}
}



?>
