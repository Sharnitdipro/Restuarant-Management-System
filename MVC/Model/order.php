<?php

include 'dbconnect.php';

$total_amount = 0;
$order = array();

if (isset($_POST['submit'])) {

  $product = $_POST['product'];
  $quantity = $_POST['quantity'];

  $query = "SELECT price FROM menu WHERE food_id = $product";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  $price = $row['price'];

  $amount = $price * $quantity;
  $total_amount += $amount;

  $order[] = array('product' => $product, 'quantity' => $quantity, 'amount' => $amount);


  if (isset($_POST['add_another'])) {

    include 'form.php';
  } else {
    include 'summary.php';
  }
} else {
  include 'form.php';
}

?>
