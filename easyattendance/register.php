<?php
















$teacherid = $_POST['teacher'];
$password = $_POST['pass'];
$email = $_POST['email'];
$phone = $_POST['phone'];





$mysqli=new mysqli("localhost","id5195852_admins","attendance","id5195852_admin");

// search submission ID

mysqli_query($mysqli,"INSERT INTO users (teacherid,password,email,phone)
		        VALUES ('$teacherid','$password','$email','$phone')");
				
				if(mysqli_affected_rows($mysqli) > 0){
	echo "<p>your details is added in database</p>";
	include'admin.html';
	
} else {
	echo "you are NOT Added<br />";
	include'addnewfac.html';
	echo mysqli_error ($mysqli);
}
?>

