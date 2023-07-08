<?php
session_start();
$eid= $_SESSION["uid"];

$serv= "localhost:3306";
$usr= "root";
$pwd= "";
$dtb= "arti";

$con= new mysqli($serv,$usr,$pwd,$dtb);

$disp= mysqli_query($con, "select * from info_data where Email_ID ='$eid'");
while ($dbrow=mysqli_fetch_array($disp))
{

?>

<html>
  <head>
    <title>Trainee Info Page</title>
    <link rel="stylesheet" href="traineeInfo.css">
    <link rel="stylesheet" href="main.css">
  </head>
  <body>

    <div class="navbar">
      <ul>
          <li><a href="main.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="contact.html">Contact Us</a></li>
      </ul>
      <ul>
            <li><a href="logout.php">Logout</a></li>
            <li><b><?php echo $dbrow["Tr_Name"];?></b></li>
        </ul>
    </div>
    
    <div class="traineeInfo-container">
      <h1>Trainee Information</h1>
      <form action="" method="">

        <label for="id">Trainee ID:</label>
        <input type="text" id="id" name="id" value="<?php echo $dbrow["Tr_ID"];?>" disabled>
        <br>
        <label for="name">Trainee Name:</label>
        <input type="text" id="name" name="nm" value="<?php echo $dbrow["Tr_Name"];?>" disabled>
        <br>
        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" name="cn" value="<?php echo $dbrow["Contact_No"];?>" disabled>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="em" value="<?php echo $dbrow["Email_ID"];?>" disabled>
        <br>
        <label for="course">Course:</label>
        <input type="text" id="course" name="cr" value="<?php echo $dbrow["Tr_Course"];?>" disabled>
        <br>
        <label for="sem">Semester:</label>
        <input type="text" id="sem" name="sm" value="<?php echo $dbrow["Tr_Sem"];?>" disabled>
        <br>
        <label for="guide">Guide Name:</label>
        <input type="text" id="guide" name="gd" value="<?php echo $dbrow["Tr_GuideName"];?>" disabled>
        <br>
        <label for="dep">Department:</label>
        <input type="text" id="dep" name="dp" value="<?php echo $dbrow["Tr_Dep"];?>" disabled>
        <br>

        <div class="feedback-link">
          <a href="feedback.php" class="text feedback-link">Click here to fill feedback</a>
        </div>
      </form>
    </div>
    <footer>
      <p>Created by <b>Arti Kumari</b> | &#169; 2023 All rights reserved.</p>
  </footer>
  </body>
</html>

<?php
}
?>