<?php
include 'dbconnect.php';

$order_id = FLOOR(RAND()*(20-10+1))+100 ;
//uniqid();
$payment_method = "Cash";
$o_status =  "Pending";

$query = "INSERT INTO orders  VALUES ('$order_id', $total_amount, '$payment_method', '$o_status')";
mysqli_query($conn, $query);

foreach ($order as $item) {
  $product = $item['product'];
  $quantity = $item['quantity'];
  $amount = $item['amount'];
  $query = "INSERT INTO order_items (order_id, product, quantity, amount) VALUES ('$order_id', '$product', '$quantity', '$amount')";
  mysqli_query($conn, $query);
}

?>


<h1>Order Summary</h1>
<p>Order ID: <?php echo $order_id; ?></p>
<table>
  <tr>
    <th>Product ID</th>
    <th>Quantity</th>
    <th>Amount</th>
  </tr>


  <?php
  foreach ($order as $item) {
    $product = $item['product'];
    $quantity = $item['quantity'];
    $amount = $item['amount'];
    echo "<tr>
            <td>$product</td>
            <td>$quantity</td>
            <td>$amount</td>
          </tr>";
  }
  ?>
  
  <tr>
    <td colspan="2">Total:</td>
    <td><?php echo $total_amount; ?></td>
    </section>
  </tr>
</table>

<label> Card Payment </label>
<a href='../Controller/card_payment.php'> Click </a><br>
<label> Mobile Banking </label>
<a href='../Controller/mobile_banking.php'> Click </a><br>
