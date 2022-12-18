<?php

if (isset($_POST['submit'])) {

  $card_number = $_POST['card_number'];
  $card_type = $_POST['card_type'];
  $amount = $_POST['amount'];

  if ($card_type != 'Visa' && $card_type != 'Mastercard') {
    echo "Invalid card type. Only Visa and Mastercard are accepted.";
  } else {
    if (strlen($card_number) != 16) {
      echo "Invalid card number. Card numbers must be 16 digits long.";
    } else {

      if (is_numeric($amount) && $amount > 0) {

        echo "Payment successful for the amount of $amount!";
      } else {

        echo "Invalid payment amount. Please enter a valid amount.";
      }
    }
  }
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Card Payment </title>
<?php include '../View/UI.php';?>
		</head>

  <body> 
	
		<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#C0C0C0"> Restaurant Management System </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244">

				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> <br><br><br>
			
				
			</div>
		</div>
	</section>
    
	
	<section id = "section1">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#C0C0C0"> Card Payment </div>
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">

    <form method="post" action="">
  <label for="card_number">Card number:</label><br>
  <input type="text" name="card_number" id="card_number"><br>
  <label for="card_type">Card type:</label><br>
  <select name="card_type" id="card_type">
    <option value="Visa">Visa</option>
    <option value="Mastercard">Mastercard</option>
  </select><br>
  <label for="amount">Amount:</label><br>
  <input type="text" name="amount" id="amount"><br>
  <input type="submit" name="submit" value="Submit">
</form>

</section>


<?php include '../View/Footer.php';?>
  </body> 
</html>
