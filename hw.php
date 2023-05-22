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
?>

<table border=1>
    <tr>
        <td>USER ID</td>
        <td>USER NAME</td>
        <td>CONTACT NO</td>
        <td>LOCATION</td>
    </tr>

<?php
// sql query to insert value
$ins= mysqli_query($con, "insert into dummy_3 values('$a', '$b', '$c', '$d')");
echo "Record inserted successfully";

// sql query to fetch value
$display= mysqli_query($con, "select * from dummy_3");
while ($dbrow=mysqli_fetch_array($display))
{
?>

    <tr>
        <td><?php echo $dbrow["User_Id"];?></td>
        <td><?php echo $dbrow["User_Name"];?></td>
        <td><?php echo $dbrow["Contact_No"];?></td>
        <td><?php echo $dbrow["Location"];?></td>
    </tr>

<?php
}
?>

</table>