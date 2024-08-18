<?php
	include_once 'config.php';

?>

<?php
	$feedback_id = $_POST["feedback_id"];
	$experience = $_POST["experience"];
	$comments = $_POST["comments"];
	$name = $_POST["name"];
	$email = $_POST["email"];

	$sql = "UPDATE details SET  experience ='$_POST[experience]', comments = '$_POST[comments]', name = '$_POST[name]', email = '$_POST[email]' WHERE feedback_id= '$_POST[feedback_id]'";

	if ($conn->query($sql) === TRUE) {
	  echo "<script>alert ('Record updated successfully') ; window.location='updateFeedback.html';</script>";
	} else {
	  echo "Error updating record: " . $conn->error;
	}

	$conn->close();
?>