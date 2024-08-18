<?php

include 'config.php';

if(isset($_POST['btn1']))
{
	
	$que = "UPDATE customers SET fName = '$_POST[fname]', lName = '$_POST[lname]', gender = '$_POST[gender]', mobileNumber = '$_POST[phone]', Email = '$_POST[email]', Address = '$_POST[addr]', DOB = '$_POST[dob]', pass = '$_POST[pwd]', rpass = '$_POST[rpwd]' where customerID = '$_POST[customerID]' "; 
	
	if(mysqli_query($conn, $que)){
		echo "<script>alert('Updated Successfully! Please Login Again');  window.location='Login_customer.php';</script>";
	}
	else{
		echo "<script>alert('Update Unsuccessful!')</script>";
	}
	
}

?>

