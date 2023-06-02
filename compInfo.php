<?php
// session_start();
// $eid= $_SESSION["uid"];
// echo $eid;
$trid = $_POST["id"];
$trname = $_POST["nm"];
$email = $_POST["em"];
$course = $_POST["cr"];
$sem = $_POST["sm"];
$guide = $_POST["gd"];
$dep = $_POST["dp"];
$contact = $_POST["cn"];

$serv= "localhost:3306";
$usr= "root";
$pwd= "";
$dtb= "arti";

$con= new mysqli($serv,$usr,$pwd,$dtb);

$ins= mysqli_query($con, "insert into info_data values('$trid', '$trname', '$email', '$course','$sem','$guide','$dep','$contact')");
echo "Profile completed successfully";

?>