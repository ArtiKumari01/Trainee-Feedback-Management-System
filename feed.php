<?php
$email = $_POST["em"];
$number = $_POST["num"];
$feedbk1 = $_POST["feedback1"];
$feedbk2 = $_POST["feedback2"];
$feedbk3 = $_POST["feedback3"];
$feedbk4 = $_POST["feedback4"];
$remarks = $_POST["remk"];
$rate = $_POST["rating"];

$serv= "localhost:3306";
$usr= "root";
$pwd= "";
$dtb= "arti";

$con= new mysqli($serv,$usr,$pwd,$dtb);

$ins= mysqli_query($con, "insert into feedback_data values('$email', '$number', '$feedbk1', '$feedbk2', '$feedbk3', '$feedbk4',  '$remarks', '$rate')");
echo "Your response has been submitted successfully!";
?>