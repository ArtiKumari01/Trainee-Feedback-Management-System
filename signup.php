<?php
$username = $_POST["un"];
$contactNumber = $_POST["cn"];
$email = $_POST["em"];
$password = $_POST["pd"];
$confirmPassword = $_POST["cpd"];

if($password !== $confirmPassword){
    echo "Passwords do not match!";
    exit;
}

$serv= "localhost:3306";
$usr= "root";
$pwd= "";
$dtb= "arti";

$con= new mysqli($serv,$usr,$pwd,$dtb);

$ins= mysqli_query($con, "insert into signup_data values('$username', '$contactNumber', '$email', '$password')");
echo "Signup successfully";

?>