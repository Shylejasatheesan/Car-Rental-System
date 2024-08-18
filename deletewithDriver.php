<?php
	include_once 'config.php';
?>


<?php


	$que = "Delete from withdriver where BookingID = '$_POST[field1]'";
	
	if(mysqli_query($conn,$que)){
		echo"<script>alert('Deleted Successfully1' ); window.location='view.php';</script>";
	}
	
	else{
		echo"<script>alert('Delete Unsuccessful!')</script>";
	}
	
	mysqli_close($conn);




?>