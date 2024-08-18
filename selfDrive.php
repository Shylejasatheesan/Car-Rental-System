<?php
	include_once 'config.php';
?>


<?php
	$VID = $_POST["field1"];
	$CID = $_POST["field2"];
	$PDate = $_POST["field4"];
	$RDate = $_POST["field5"];
	
	
	$sql = "insert into selfDrive(BookingID,VehID,CusID,PDate,RDate)values('','$VID','$CID','$PDate','$RDate')";
	
	
	if(mysqli_query($conn,$sql)){
		
		echo"<script>alert('Record Inserted Successfully!');window.location='displayBooking.php';</script>";
	}
	else
	{
		echo"<script>alert('Error in inserting records!')</script>";
	}
	
	
	mysqli_close($conn);




?>