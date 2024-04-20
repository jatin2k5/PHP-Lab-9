<?php

$con = mysqli_connect("localhost","root","","mydb");
mysqli_query($con, "CREATE DATABASE NewDatabase");
mysqli_select_db($con, "NewDatabase");
$res = mysqli_query($con,"SELECT DATABASE()");
while ($row = mysqli_fetch_row($res)) {
print("Current Database: ".$row[0]);
}
mysqli_close($con);
?>