<?php

//get value paa from form in login.php file
$username =$_POST['user'];
$password =$_POST['pass'];


$username= stripcslashes($username);
$password = stripcslashes($password);
/**$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);*/






$mysqli= new mysqli('localhost','id5195852_admins','attendance','id5195852_admin');
$q="select * from users where teacherid='$username' && password='$password'";
$result = mysqli_query($mysqli,$q)
or die("failed to query database ".mysqli_error());
$row=mysqli_fetch_array($result);
if($row['teacherid']==$username && $row['password'] == $password){
	echo"welcome.".$row['teacherid'];
	include'faculty.html';
	
	
}
else
{
echo"failed to login";
}



?>