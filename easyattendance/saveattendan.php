<?php

$size=sizeof($_POST);
$record=$size/2;

for($i=1;$i<=$record;$i++){
    $index1="rollnumber".$i;
    $rollnumber[$i]=$_POST[$index1];
    $index2="present".$i;
    $present[$i]=$_POST[$index2];
    
}

$conn=new mysqli("localhost","id5195852_root","attendance","id5195852_users");

for($i=1;$i<=$record;$i++){
$q="UPDATE ninja SET present='$present[$i]', totallecture=totallecture+1 WHERE rollnumber='$rollnumber[$i]'";
mysqli_query($conn,$q);

}
header('Location: attendance.html');
mysqli_close($conn);

?>

