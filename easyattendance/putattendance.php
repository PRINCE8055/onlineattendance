<?
$attend=$_POST['attendance'];






$mysqli=new mysqli("localhost","id5195852_root","attendance","id5195852_users");

// search submission ID

mysqli_query($mysqli,"INSERT INTO ninja (present,password)
		        VALUES ('$attend') where name=");
				
				if(mysqli_affected_rows($mysqli) > 0){
	echo "<p>your details is added in database</p>";
	include'adminlogin.html';
	
} else {
	echo "you are NOT Added<br />";
	include'addnewfac.html';
	echo mysqli_error ($mysqli);
}
?>