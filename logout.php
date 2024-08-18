<?php

include 'config.php';

session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("Location:Login_admin.php");
?>