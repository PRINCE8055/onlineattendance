<?php
session_start();
?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">

<title>admin login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="admin login.css">
</head>
<body>
<div class="a">
<div class="b"><img src="1.png" width="120px"></div>
<div class="c">Online attendance management system</div></div>
<div class="d"></div>
<center><div class="f">Admin login . . .</div></center>
<form action="adminlogin.php" method="post"><div class="g"><div class="i"><font color="#FFFFFF"> Admin login  </div><br><font color="black"><b><div class="form-group">
  <label for="usr">Admin ID:</label>
  <input type="text"  name="user" class="form-control" placeholder="Enter Admin ID Please"><br><div class="form-group">
  <label for="usr">Admin Password:</label>
  <input type="password"  class="form-control" name="pass" placeholder="Enter Admin Password Please"><br><div class="j"><button type="submit" class="btn btn-outline-primary">Login</button></div></div></b></form>
<div class="h"><center><b></b></center></div>
</div>

</body>
</html>
