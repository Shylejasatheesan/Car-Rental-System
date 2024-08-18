<?php
	include_once 'config.php';
?>


<?php

	$type = $_POST["field1"];
	$name = $_POST["field2"];
	$month = $_POST["field3"];
	$week = $_POST["field4"];
	$excess = $_POST["field5"];
	
	$sql = "insert into vehicles(ID, Type,Name,Per_Week,Per_Month,Excess_Mileage)values('','$type','$name','$week','$month','$excess')";
	
	if(mysqli_query($conn,$sql)){
		
		echo"<script>alert('Record Inserted Successfully!');window.location='view.php';</script>";
	}
	else
	{
		echo"<script>alert('Error in inserting records!')</script>";
	}
	
	
	mysqli_close($conn);




?>