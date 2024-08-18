<?php

include 'config.php';

session_start();
$message="";
if(count($_POST)>0) {
$result = mysqli_query($conn,"SELECT * FROM admin WHERE username='" . $_POST["email"] . "' and password = '". $_POST["pass"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['adminID'];
$_SESSION["name"] = $row['username'];
} else {
$message = "Invalid Username or Password!";
}
}

if(isset($_SESSION["id"])) {
echo "<script>alert('Welcome..!'); window.location='view.php';</script>";
}
?>