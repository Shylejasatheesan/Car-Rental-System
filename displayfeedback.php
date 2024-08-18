<?php
	include_once 'config.php';

?>


<!DOCTYPE HTML>
<html>
<head>


<title>Car Rental System</title>
<link rel="stylesheet" type="text/css" href="styles/Home_styles.css">
<link rel="stylesheet" type="text/css" href="styles/feedback.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@700&display=swap" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="styles/footer.css">

<meta charset="utf-8">
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">

<style>
	p.alignleft {
	float: left;
	}
	p.alignright {
		float: right;
	}
	
	.button {
	  background-color: #4CAF50; 
	  border: none;
	  color: white;
	  padding: 20px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 2px;
	  cursor: pointer;
	}

	.button1 {
	  background-color: grey; 
	  color: black; 
	  border: 2px solid;
	  margin: 4px 2px;
	  top : 50%;
	  border-radius: 12px;
	}
	
	.button1:hover {
	  background-color: #669999;
	  color: white;
	}
	
	.button2 {
	  background-color: grey; 
	  color: black; 
	  border: 2px solid;
	  margin: 4px 2px;
	  top:100%;
	  border-radius: 12px;
	}

	.button2:hover {
	  background-color:#669999;
	  color: white;
	}
	
	table, th, td {
	  background-color: grey;
	}
		
	
	
</style>


</head>
<body style="background-color:black;">


<div style="background-color:orange; width:100%; height:176px; padding-bottom:20px">
<a href="index.html"><img src="images/LOGO11.png" width="192" height="192" class="logo" style="border-radius:100px; padding-top:2px; padding-left:5px" align="left"></a>

<div style="padding-top: 1px;  padding-left: 10px; padding-right:150px;">
<header>
<center><h1 class="monospace"><b>EagleEye Rent-a-Car</b></h1></center>
<p style="position: relative; text-align:right; width:111%; font-size:18px"><a href="Login_customer.php" style="text-decoration:none">LOG OUT </a></p>
</header>
</div>
</div>
<ul class="menu">
   <li class="menu"><a href="index.html"><i class="fa fa-home" id="nav-image"></i>Home</a></li>
   <li class="menu"><a href="about us.html"><i class="fa fa-user" id="nav-image"></i>About Us</a></li>
   <li class="menu"><a href="Rates.php"><i class="fa fa-usd" id="nav-image"></i>Rates</a></li>
   <li class="menu"><a href="contactUs.html"><i class="fa fa-phone" id="nav-image"></i>Contact Us</a></li>
</ul>







<center>

<div>
	<table border="1"  style="color:white" border-color="white" width="75%">
	<tr>
		<th>Feedback ID</th>
		<th>Rate</th>
		<th>Comment</th>
		<th>Name</th>
		<th>Email</th>
	</tr>
	
	<?php

		$sql = "select * from details";
		$result = $conn -> query($sql);
		
		if($result -> num_rows>0){
			while($row = $result->fetch_assoc()) {
			echo "<tr>><td>".$row["feedback_id"]."</td><td>".$row["experience"]."</td><td>".$row["comments"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td></tr>";
		  }
		}
		else{
			echo "0 results";
		}
		
		echo "</table>";
		
		$conn->close();

	?>
	
</div>

</center><br><br>



<center>

<p style="color:#669999;" >Do you wand to update your feedback ? </p>
<a href="updatefeedback.html" class="button button1">UPDATE</a>
<p style="color:#669999;" >Do you wand to delete your feedback ? </p>
<a href="deletefeedback.html" class="button button2">DELETE</a><br>
</center>

<br>








<footer style="background-color:#283c5f; width:100%; height:200px; padding-top:2px">
<div class="main-content">
<div class="left box1">
<h4><a href="#">QUICK LINKS</a></h4>
<h5><a href="index.html">HOME</a></h5>
<h5><a href="https://distancecalculator.globefeed.com/Sri_Lanka_Distance_Calculator.asp">DISTANCE CALCULATOR</a></h5>
<h5><a href="terms.html">TERMS & CONDITIONS</a></h5>
</div>

<div class="left box2">
<h4><a href="#"></a></h4>
<h5><a href="Rates.php">RATES</a></h5>
<h5><a href="about us.html">ABOUT US</a></h5>
<h5><a href="contactUs.html">CONTACT US</a></h5>
<h5><a href="policy.html">PRIVACY POLICY</a></h5>
</div>


<img src="images/LOGO12.png" width="170px" height="170px" class="logo" style="padding-top:15px; padding-left:10px; padding-right:230px;" align="center">




<div class="right box3">
<h4><font color="white">FOLLOW US</font></h4>


<div class="social">
<a href="#"><span class="fa fa-facebook"></span></a>
<a href="#"><span class="fa fa-twitter"></span></a>
<a href="#"><span class="fa fa-instagram"></span></a>
<a href="#"><span class="fa fa-youtube"></span></a>
<h3><a href="AddFeedback.html" style="text-decoration:none; color:white">Give Us Your Feedback</font></a></h3>
</div>
</div>
</div>
</footer>
<h5 align="center" style="font-family:'Poppins', sans-serif"><font color="white">Copyright 2020 © Site.com . All Rights Reserved.</font></h5>
</body>

</html>