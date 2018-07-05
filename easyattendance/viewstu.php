<?php

$username=$_POST['rollnumber'];



$mysqli=new mysqli("localhost","id5195852_root","attendance","id5195852_users");
$q="select * from ninja where rollnumber='$username'";
$result = mysqli_query($mysqli,$q);
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
<th>Roll number</th>
<th>Name</th></th>
<th>PRESENT ATTENDANCE</th>
<th>TOTAL LECTURE</th>
<th>PERCENTAGE</th>
</tr>
<?php
    for($i=1;$i<=$num;$i++){
		$row=mysqli_fetch_array($result);

?>

<tr>
<td><?php echo $row['rollnumber'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['present'];?></td>
<td><?php echo $row['totallecture']?></td>
<td><?php  $r=$row['present'];
$c=$row['totallecture'];
$d=($r*100)/$c;
echo $d;

?></td>
</tr>

</table></center>
<?php
}
?>