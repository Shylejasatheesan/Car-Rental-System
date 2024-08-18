<?php
	include_once 'config.php';
?>


<?php
	$VID = $_POST["field1"];
	$CID = $_POST["field2"];
	$PDate = $_POST["field4"];
	$RDate = $_POST["field5"];
	$Ploc = $_POST["field6"];
	$Dloc = $_POST["field7"];
	
	$sql = "insert into withDriver(BookingID,VehID,CusID,PDate,RDate,Ploc,Dloc)values('','$VID','$CID','$PDate','$RDate','$Ploc','$Dloc')";
	
	if(mysqli_query($conn,$sql)){
		
		echo"<script>alert('Record Inserted Successfully!');window.location='displayBooking2.php';</script>";
	}
	else
	{
		echo"<script>alert('Error in inserting records!')</script>";
	}
	
	
	mysqli_close($conn);




?>