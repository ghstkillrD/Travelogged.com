<?php
	include_once 'config.php';
?>

<?php

	$email = $_POST["email"];
	$nop = $_POST["nop"];
	$prc = $_POST["result"];

	$s = "select * from register where user_email = '$email'";

	$result = mysqli_query($conn, $s);

	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		$sql = "insert into settings(user_email, no_of_people, total_cost)values('$email','$nop','$prc')";

		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert ('Proceed Successfully!')</script>";
			header('location:PAYMENTS.html');
		}
		else
		{
			echo "<script>alert ('Error in proceeding!')</script>";
			header('location:MAKE_YOUR_TRIP.html');
		}

		mysqli_close($conn);
		
	}
	else
	{	
		echo "<script>alert ('Invalid email!')</script>";
		header('location:MAKE_YOUR_TRIP.html');
	}
	
?>	