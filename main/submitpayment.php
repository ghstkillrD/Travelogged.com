<?php
	include_once 'config.php';
?>

<?php
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$pnumber = $_POST["phone"];
	$address = $_POST["address"];
	$cardtype = $_POST["time"];
	$cardnumber = $_POST["number"];
	$valid =  $_POST["date"];
	$cvv =  $_POST["cvv"];

	$sql = "insert into payment(first_name, last_name, email, phone_number, billing_address, card_type, card_number, valid_date, cvv_number)values('$fname','$lname','$email','$pnumber','$address','$cardtype','$cardnumber','$valid','$cvv')";

	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert ('Payment Successfull!')</script>";
		header('location:HOME_registered.html');
	}
	else
	{
		echo "<script>alert ('Payment Unsuccessfull!')</script>";
		header('location:PAYMENTS.html');
	}

	mysqli_close($conn);
?>	