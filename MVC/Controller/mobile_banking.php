<?php

if (isset($_POST['submit'])) {

  $mobile_number = $_POST['mobile_number'];
  $payment_method = $_POST['payment_method'];
  $amount = $_POST['amount'];


  if ($payment_method != 'Bkash' && $payment_method != 'Nogod') {

    echo "Invalid payment method. Only Bkash and Nogod are accepted.";
  } else {

    if (strlen($mobile_number) != 11) {

      echo "Invalid mobile number. Mobile numbers must be 11 digits long.";
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
			<title> Mobile Banking </title>
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
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#C0C0C0"> Mobile Banking </div>
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">

<form method="post" action="">
  <label for="mobile_number">Mobile number:</label><br>
  <input type="text" name="mobile_number" id="mobile_number"><br>
  <label for="payment_method">Payment method:</label><br>
  <select name="payment_method" id="payment_method">
    <option value="Bkash">Bkash</option>
    <option value="Nogod">Nogod</option>
  </select><br>
  <label for="amount">Amount:</label><br>
  <input type="text" name="amount" id="amount"><br>
  <input type="submit" name="submit" value="Submit">
</form>

</section>


<?php include '../View/Footer.php';?>
  </body> 
</html>
