<?php
















$roll = $_POST['rollnumber'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];





$mysqli=new mysqli("localhost","id5195852_root","attendance","id5195852_users");

// search submission ID

mysqli_query($mysqli,"INSERT INTO ninja (rollnumber,name,email,phone)
		        VALUES ('$roll','$name','$email','$phone')");
				
				if(mysqli_affected_rows($mysqli) > 0){
	
	include'admin.html';
	
	
} 
else 
{
	echo "you are NOT Added<br />";
	include'addnewfac.html';
	echo mysqli_error ($mysqli);
}
?>