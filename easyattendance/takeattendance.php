<?php


//get value paa from form in login.php file

$mysqli=new mysqli("localhost","id5195852_root","attendance","id5195852_users");
$q="select * from ninja";
$result = mysqli_query($mysqli,$q);
$num=mysqli_num_rows($result);



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
<div class="c">Online attendance management system</div></div><form method="POST" action="saveattendan.php"><table border="1" padding="40" font="bold">
<center>
<tr>
<th>Roll number    </th>
<th>    previous</th>
<th>Total Lecture</th>
<th>Update</th>
</tr>
<?php
    for($i=1;$i<=$num;$i++){
		$row=mysqli_fetch_array($result);

?>
<tr>
<td><?php echo $row['rollnumber'];?><input type="hidden" name="rollnumber<?php echo $i;?>" value="<?php echo $row['rollnumber'];?>"/></td>
<td><?php echo $row['present'];?></td>
<td><?php echo $row['totallecture']?></td>
<td><input type="text" name="present<?php echo $i;?>" value="<?php echo $row['present'];?>"/></td>
</tr>
<?php
	}

?>

</center>
</table>
<input type="submit"  value="submit"/>
</form></body>
</html>
<div></div>
