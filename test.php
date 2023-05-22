<?php
$a = $_POST["id"]; # storing name from HTML file
$b = $_POST["nm"];
$c = $_POST["cr"];
$d = $_POST["noc"];

$serv= "localhost:3306";
$usr= "root";
$pwd= "";
$dtb= "arti";

$con= new mysqli($serv,$usr,$pwd,$dtb);

if ($con)
{
    echo "Database connected"."<br>";
}
?>

<table border=1>
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>COURSE</td>
        <td>NAME OF COLLEGE</td>
    </tr>

<?php
$ins= mysqli_query($con, "insert into dummy values('$a', '$b', '$c', '$d')");
echo "Record inserted successfully";

$display= mysqli_query($con, "select * from dummy");
while ($dbrow=mysqli_fetch_array($display))
{
?>

    <tr>
        <td><?php echo $dbrow["ID"];?></td>
        <td><?php echo $dbrow["Name"];?></td>
        <td><?php echo $dbrow["Course"];?></td>
        <td><?php echo $dbrow["College_name"];?></td>
    </tr>

<?php
}
?>

</table>