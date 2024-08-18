<?php
    include 'config.php';
?>

<?php
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$DOB = $_POST['DOB'];
	$email = $_POST['email'];
	$pNumber = $_POST['pNumber'];
	$gender = $_POST['gender'];
	$drivingLicenseNo = $_POST['drivingLicenseNo'];
	$pass = $_POST['pass'];
	$rpass = $_POST['rpass'];
	
	$query = "insert into drivers(driverID, fName, lName, DOB, Email, pNumber, gender, drivingLicenseNo, pass, rpass) values ('', '$fname', '$lname', '$DOB', '$email', '$pNumber', '$gender', '$drivingLicenseNo', '$pass', '$rpass')";

    if(mysqli_query($conn, $query)){
		echo"<script>alert ('Thank you for joining with us. Now you can Login'); window.location='Login_driver.php';</script>";
	}
	

?>