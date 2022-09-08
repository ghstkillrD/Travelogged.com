<?php
	include_once 'config.php';
?>

<?php

	$email = $_POST["email"];
	$pwd =  $_POST["password"];

	$s = "select * from register where user_email = '$email' && user_pwd = '$pwd'";

	$result = mysqli_query($conn, $s);

	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		echo "<script>alert ('Login Successfull!')</script>";
		header('location:HOME_registered.html');
		$_SESSION['email'] = $email;
	}
	else
	{	
		echo "<script>alert ('Invalid email or password!')</script>";
		header('location:LOGIN.html');
	}

?>	