<?php
$host = "localhost";
$username = "root";
$passwd = " ";
$dbname = "mydb";
$con = mysqli_connect($localhost, $username,$mydb);
if($con){
print("Connection Established Successfully");
}else{
print("Connection Failed ");
}?>
