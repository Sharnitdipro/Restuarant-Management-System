<?php

include 'dbconnect.php';

$sql1 = "SELECT COUNT(*) as num_rows FROM menu";

$result1 = mysqli_query($conn, $sql1);

$row1 = mysqli_fetch_assoc($result1);

$numRows = $row1['num_rows'];

$sql2 = "SELECT COUNT(order_id) as num_orders, SUM(total_price) as total_sales FROM orders";

$result2 = mysqli_query($conn, $sql2);

$row2 = mysqli_fetch_assoc($result2);

$numOrders = $row2['num_orders'];
$totalSales = $row2['total_sales'];

mysqli_close($conn);

?>

<html>
<head>
  <title>Database Statistics</title>
</head>
<body>
  <h1>Database Statistics</h1>
  <p>Number of Food Items in Menu: <?php echo $numRows; ?></p>
  <p>Number of Orders: <?php echo $numOrders; ?></p>
  <p>Total Sales: <?php echo $totalSales; ?></p>
</body>
</html>
