<?php
$a = $_POST["id"]; # storing name from HTML file
$b = $_POST["nm"];
$c = $_POST["cn"];
$d = $_POST["ln"];

$serv= "localhost:3306";
$usr= "root";
$pwd= "";
$dtb= "arti";

// statement to connect db
$con= new mysqli($serv,$usr,$pwd,$dtb);

if ($con)
{
    echo "Database connected"."<br>";
}

// sql query to insert value
$ins= mysqli_query($con, "insert into dummy_3 values('$a', '$b', '$c', '$d')");
echo "Record inserted successfully";

// sql query to fetch value
$display= mysqli_query($con, "select * from dummy_3");
echo "<table style='border-collapse: collapse;'>";
echo "<tr><th style='border: 1px solid black;'>USER ID</th><th style='border: 1px solid black;'>USER NAME</th><th style='border: 1px solid black;'>CONTACT NO</th><th style='border: 1px solid black;'>LOCATION</th></tr>";
while ($dbrow=mysqli_fetch_assoc($display))
{
    echo "<tr><td style='border: 1px solid black;'>" . $dbrow["User_Id"] . "</td><td style='border: 1px solid black;'>" . $dbrow["User_Name"] . "</td><td style='border: 1px solid black;'>" . $dbrow["Contact_No"] . "</td><td style='border: 1px solid black;'>" . $dbrow["Location"] . "</td></tr>";
}
echo "</table>";
?>