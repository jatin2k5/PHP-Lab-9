<?php
$con = mysqli_connect("localhost","root","","mydb");
mysqli_query($con, "CREATE TABLE myplayers(ID INT, First_Name VARCHAR(255), Last_Name
VARCHAR(255), Place_Of_Birth VARCHAR(255), Country VARCHAR(255))");
print("Table Created......"."<br>");
mysqli_query($con, "INSERT INTO myplayers values(1, 'Sikhar', 'Dhawan', 'Delhi', 'India')");
mysqli_query($con, "INSERT INTO myplayers values(2, 'Jonathan', 'Trott', 'CapeTown',
'SouthAfrica')");
mysqli_query($con, "INSERT INTO myplayers values(3, 'Kumara', 'Sangakkara', 'Matale',
'Srilanka')");
print("Record Inserted......"."<br>");
$result = mysqli_query($con, "SELECT * FROM myplayers");
$count = mysqli_num_rows($result);
print("Number of rows in the result: ".$count);
mysqli_free_result($result);
mysqli_close($con);
?>