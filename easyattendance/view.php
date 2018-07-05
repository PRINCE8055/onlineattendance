<?php

$username=$_POST['viewfac'];



$conn=new mysqli("localhost","id5195852_admins","attendance","id5195852_admin");
if ($conn->connect_error) die($conn->connect_error);
$query = "SELECT * FROM users where teacherid='$username'";
$result = mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
mysqli_close($conn);

?>
<html>
<head>
<meta charset="utf-8">
<title> Take Attendance</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="delete faculty.css">
</head>
<body>
<div class="a">
<div class="b"><img src="1.png" width="120px"></div>
<div class="c">Online attendance management system</div></div>
<center><table border="1" cellpadding="30">
<tr>
<th>TEACHER ID</th>
<th>EMAIL ID</th></th>
<th>MOBILE NO.</th>
</tr>
<?php
    for($i=1;$i<=$num;$i++){
		$row=mysqli_fetch_array($result);

?>

<form action="takeattendance.php" method="POST"><tr>
<td><?php echo $row['teacherid'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['phone'];?></td>
</tr>
</form>
</table></center>
<?php
}
?>
	