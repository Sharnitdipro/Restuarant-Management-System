<?php

include 'dbconnect.php';

$sql = "SELECT SUM(total_price * 0.05) as total_tax FROM orders";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "Total tax: " . $row['total_tax'];

mysqli_close($conn);

?>
