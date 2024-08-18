<?php
	include_once 'config.php';
?>


<?php
	
	
	
	
	$query = "update vehicles SET Type ='$_POST[field2]',Name ='$_POST[field3]',Per_Week ='$_POST[field5]',Per_Month ='$_POST[field4]',Excess_Mileage ='$_POST[field6]' where ID ='$_POST[field1]'";
	if(mysqli_query($conn,$query)){
		echo"<script>alert('Updated Successfully!'); window.location='view.php';</script>";
	}
	
	else{
		echo"<script>alert('Update Unsuccessful!')</script>";
	}
	
	mysqli_close($conn);
	
?>
	
	