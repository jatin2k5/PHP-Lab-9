<?php

$con = mysqli_connect("localhost", "root", "","mydb");
mysqli_query($con, "SELECT * FORM employee");
$error = mysqli_error($con);
print("Error Occurred: ".$error);
mysqli_close($con);
?>
