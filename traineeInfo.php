<?php
$id = $_POST["id"];
$name = $_POST["nm"];
$contactNo = $_POST["cn"];
$email = $_POST["em"];
$course = $_POST["cr"];
$sem = $_POST["sm"];
$guide = $_POST["gd"];
$dep = $_POST["dp"];

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
        <td>TRAINEE ID</td>
        <td>TRAINEE NAME</td>
        <td>CONTACT NUMBER</td>
        <td>EMAIL</td>
        <td>COURSE</td>
        <td>SEMESTER</td>
        <td>GUIDE NAME</td>
        <td>DEPARTMENT</td>
    </tr>

<?php
$ins= mysqli_query($con, "insert into info_data values('$id', '$name', '$contactNumber', '$email', '$course', '$sem', '$guide', '$dep')");
echo "Record inserted successfully";

$display= mysqli_query($con, "select * from info_data");
while ($dbrow=mysqli_fetch_array($display))
{
?>

    <tr>
        <td><?php echo $dbrow["Tr_ID"];?></td>
        <td><?php echo $dbrow["Tr_Name"];?></td>
        <td><?php echo $dbrow["Email_ID"];?></td>
        <td><?php echo $dbrow["Tr_Sem"];?></td>
        <td><?php echo $dbrow["Tr_GuideName"];?></td>
        <td><?php echo $dbrow["Tr_Dep"];?></td>
    </tr>

<?php
}
?>

</table>