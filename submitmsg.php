<?php
	include_once 'config.php';
?>

<?php
	$pnum = $_POST["phone"];
	$msg = $_POST["text"];

	$sql = "insert into contact(pNumber, msg)values('$pnum','$msg')";

	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert ('Inserted Successfully')</script>";
	}
	else
	{
		echo "<script>alert ('Error')</script>";
	}

	mysqli_close($conn);
?>	