<?php
    include 'config.php';
?>

<?php
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$mobileNumber = $_POST['phone'];
	$Email = $_POST['email'];
	$Address = $_POST['addr'];
	$DOB = $_POST['dob'];
	$pass = $_POST['pwd'];
	$rpass = $_POST['rpwd'];
	
	$query = "insert into customers(customerID, fName, lName, gender, mobileNumber, Email, Address, DOB, pass, rpass) values ('', '$fname', '$lname', '$gender', '$mobileNumber', '$Email', '$Address', '$DOB', '$pass', '$rpass')";

    if(mysqli_query($conn, $query)){
		echo"<script>alert ('Thank you for joining with us. Now you can Login'); window.location='Login_customer.php';</script>";
	}
	

?>