<?php
	include_once 'config.php';
?>

<?php
	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$gender = $_POST["gender"];
	$pnumber = $_POST["phone"];
	$email = $_POST["email"];
	$address = $_POST["data"];
	$dob = $_POST["day"];
	$pwd =  $_POST["password"];
		
		$sql = "insert into register(user_id, user_fname, user_lname, user_gender, user_pnumber, user_email, user_address, user_dob, user_pwd)values('','$fname','$lname','$gender','$pnumber','$email','$address','$dob','$pwd')";

		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert ('Registered Successfully!')</script>";
			header('location:LOGIN.html');
		}
		else
		{
			echo "<script>alert ('NOT Registered!')</script>";
			header('location:REGISTER.html');
		}

		mysqli_close($conn);
		

?>	