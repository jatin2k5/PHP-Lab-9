<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "mydb";
$con = mysqli_connect($host, $username, $passwd, $mydb);
$res = mysqli_close($con);
if($res){
print("Connection Closed");
}else{
print("There is an issue while closing the connection");
}?>
