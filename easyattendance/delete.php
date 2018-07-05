<?php

//get value paa from form in login.php file
$username =$_POST['deletefac'];



$username= stripcslashes($username);
$conn= new mysqli('localhost','id5195852_admins','attendance','id5195852_admin');
$query = "DELETE FROM users WHERE teacherid='$username'";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
include'admin.html';
?>
