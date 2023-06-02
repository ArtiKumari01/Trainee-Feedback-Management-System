<?php
session_start();
$email = $_POST["em"];
$password = $_POST["pd"];
$_SESSION["uid"]= $email;

$serv= "localhost:3306";
$usr= "root";
$pwd= "";
$dtb= "arti";

$con= new mysqli($serv,$usr,$pwd,$dtb);

$disp= mysqli_query($con, "select * from signup_data where Email_ID='$email' and Password='$password'");
if(mysqli_num_rows($disp)==1)
{
    $disp1 = mysqli_query($con, "select * from info_data where Email_ID='$email'");
    if(mysqli_num_rows($disp1)>=1)
    {
        $_SESSION["uid"]= $email;
        header('Location:http://localhost/SNTI_PROJECT/traineeInfo.php');
    }
    else{
        $_SESSION["uid"]= $email;
        header('Location:http://localhost/SNTI_PROJECT/compInfo.html');
    }
}
else{
?>

    <html>
        <p style="text-align:center;color:red">Invalid Credential !<a href="login.html"> Click here</a> to login again.</p>
    </html>

<?php
}
?>