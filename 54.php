<?php

$con = mysqli_connect("localhost","root","","mydb");
mysqli_query($con,"SELECT * FROM myplayers");
$rows = mysqli_affected_rows($con);
print("Number of affected rows: ".$rows);
mysqli_close($con);?>