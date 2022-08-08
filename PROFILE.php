<?php
  include_once 'config.php';
?>

<!DOCTYPE html>
<html>
	<head>
	<script type = "text/javascript" src = "JS/script.js"> </script>
		<style>
		
			 
.s{
  background-image:url(images/back1.jpg);
  height:900px;
  
  
  }
			
		}
      
	  	    input[type=text], select {
         width: 100%;
         padding: 12px 20px;
         margin: 8px 0;
         display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
         box-sizing: border-box;
}

        input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
}

         input[type=submit]:hover {
         background-color: #45a049;
}

.pro {
       border-radius: 5px;
       background-color: #f2f2f2;
       padding: 20px;
} 
.profilepic {
	display : block;
	margin-left : auto;
	margin-right : auto;
	margin-top : 30px;
	--margin-bottom : 10px;
	vertical-align : middle;
	width : 320px;
	height : 290px;
	--padding : 1px
}
	
.oldtrip {
  background-color: lightgrey;
  width: 300px;
  border: 15px solid grey;
  padding: 50px;
  margin: 20px;
}

.checked {
  color: orange;
}

#pro1{
	
	width:100%;
	height:100px;
	
	font-size:40px;
	position:absolute;
	bottom:-390px;
}
 
		
		
		</style>
		
		<title> Profile </title>
		<link rel = "stylesheet" type = "text/css" href = "styles/styles - new.css">
		
	</head>
	<body>
		
	<div class = "s" >
		<hr class = "hr_1">
		<ul class="menu"><b> 
			<li class="menu"> <a href="HOME_registered.html">Home</a> </li>
			<li class="menu"> <a href="NEWS_registered.html">Tourism News</a> </li>
			<li class="menu"> <a href="TRIP.html">Make Your Trip</a> </li>
			<li class="menu"> <a href="CONTACT_registered.html">Contact Us</a> </li>
			<li class="menu"> <a href="PROFILE.php">Profile</a> </li>
			<li class="menu"> <a href="ABOUTUS_registered.html">About US</a> </li><br>
		</ul>
	
		<br><br>
	
	<h1 class = "text">TRAVELOGGED</h1>
	<img class = "mainlogo1" align = "center" src = "images/mainlogo.png"><br><br><br><br><br><br><br><br><br><br>
	
</div><br><br><br><br><br>
<center><p id="pro1"><font color="black">User Profile</font></p><br></center><br><br>


	<img class = "profilepic" align = "center" src = "images/profile.png">

	<?php

		$sql = "select * from register where user_id = 1";
		$result = $conn->query($sql);

		if($result->num_rows>0)
		{
			while($row = $result->fetch_assoc())
			{	
				echo "<h2 align = 'center'>".$row["user_fname"]." ".$row["user_lname"]."</h2><br><hr>";
				echo "<div class = 'pro'><center><div class = 'oldtrip'>";
				echo "<p align = 'left'>Address : ".$row["user_address"]."<br>Email : ".$row["user_email"]."<br>Phone Number : ".$row["user_pnumber"]."<br>Date of Birth : ".$row["user_dob"]."</p>";
				echo "</div></center></div>";
			}
		}
	?>
	  
	  <center>

	  <div class="oldtrip">
	  <h2>User Old Trip Details</h2>
	  <textarea></textarea>
	  </div>
	  <br>
	  
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <h2>User Rating</h2>
	   <div class= "checked">
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
	  
	  </div>
	</center>
   
<br><br>
		

	<footer class = "footer3">
		<div>
			<img class = "storeimgs" src = "images/stores.png" align = "right" style="position: absolute; right: 30px">
			<img class = "contactimgs" src = "images/o.png" align = "left">
			<p class = "footertext2">164,De Mel Mawatha,Colombo 7,Sri Lanka</p>
			<img class = "contactimgs" src = "images/ooo.png" align = "left">
			<p class = "footertext2">+94 77 452 234 5</p>
			<br>
			<hr class = "hr_1">
		
			<img class = "paycards" src = "images/visa.png" align = "left">
			<img class = "paycards" src = "images/mastercard.png" align = "left">
			<img class = "paycards" src = "images/americanex.png" align = "left">
			<img class = "mainlogo2" src = "images/mainlogo.png" align = "right" style="position: absolute; right: 30px">
		</div>
		<p class = "footertext4">©2020 All Rights Reserved by Sri Lankan Tourism Bureau</p>
		 
	

	<div class="footer4">
		<p class = "footertext1">Follow us on : </p>
		<a href = "https://www.facebook.com"><img class = "socialmedia" src = "images/fb1.png"></a>
		<a href = "https://www.instagram.com"><img class = "socialmedia" src = "images/insta.png"></a>
		<a href = "https://www.twitter.com"><img class = "socialmedia" src = "images/tw1.png"></a>
		<a href = "https://www.linkedin.com"><img class = "socialmedia" src = "images/in.png"></a>
	</div>
	</footer>
	</body>
</html>
