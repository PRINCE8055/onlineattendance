<?php

$present=$_POST['hello'];


$mysqli=new mysqli("localhost","id5195852_root","attendance","id5195852_users");
$table="UPDATE ninja SET present='present+1' WHERE rollnumber='$present'";
$result = mysqli_query($mysqli,$table);


if ($result){
    echo "record update successfully";
  include'attendance.html';
}
else{
    echo "Error updating record:";
    include'attendance.html';

}

?>