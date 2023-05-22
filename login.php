<?php
$email = $_POST["em"];
$password = $_POST["pd"];

$serv= "localhost:3306";
$usr= "root";
$pwd= "";
$dtb= "arti";

$con= new mysqli($serv,$usr,$pwd,$dtb);

$disp= mysqli_query($con, "select * from signup_data where Email='$email' and Password='$password'");
if(mysqli_num_rows($disp)==1)
{
    echo "Login Successfully!";
}
else{
    echo "Invalid credential!";
}

?>