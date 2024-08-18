<?php

include 'config.php';

if(isset($_POST['update']))
{
	
	$que = "UPDATE drivers SET fName = '$_POST[fname]', lName = '$_POST[lname]', DOB = '$_POST[DOB]', Email = '$_POST[email]', pNumber = '$_POST[pNumber]', gender = '$_POST[gender]', drivingLicenseNo = '$_POST[drivingLicenseNo]', pass = '$_POST[pass]', rpass = '$_POST[rpass]' where driverID = '$_POST[ID]' "; 
	
	if(mysqli_query($conn, $que)){
		echo "<script>alert('Updated Successfully! Please Login Again');  window.location='Login_driver.php';</script>";
	}
	else{
		echo "<script>alert('Update Unsuccessful!')</script>";
	}
	
}

?>

