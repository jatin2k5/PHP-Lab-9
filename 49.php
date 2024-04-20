<?php
$con=mysqli_connect("localhost","root","","my_db");
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: ". mysqli_connect_error();
exit();
}
if (!mysqli_query($con,"INSERT INTO Persons (FirstName) VALUES ('Glenn')")) {
echo("Errorcode: " . mysqli_errno($con));
}
mysqli_close($con);
?>