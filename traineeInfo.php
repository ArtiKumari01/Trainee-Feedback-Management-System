<?php

$serv= "localhost:3306";
$usr= "root";
$pwd= "";
$dtb= "arti";

$con= new mysqli($serv,$usr,$pwd,$dtb);

$disp= mysqli_query($con, "select * from info_data where Email_ID ='abc@gmail.com'");
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
          <li><a href="#">About Us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    
    <div class="traineeInfo-container">
      <h1>Trainee Information</h1>
      <form action="" method="">

        <label for="id">Trainee ID:</label>
        <input type="text" id="id" name="id" value="<?php echo $dbrow["Tr_ID"];?>" required>
        <br>
        <label for="name">Trainee Name:</label>
        <input type="text" id="name" name="nm" value="<?php echo $dbrow["Tr_Name"];?>" required>
        <br>
        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" name="cn" value="<?php echo $dbrow["Contact_No"];?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="em" value="<?php echo $dbrow["Email_ID"];?>" required>
        <br>
        <label for="course">Course:</label>
        <input type="text" id="course" name="cr" value="<?php echo $dbrow["Tr_Course"];?>" required>
        <br>
        <label for="sem">Semester:</label>
        <input type="text" id="sem" name="sm" value="<?php echo $dbrow["Tr_Sem"];?>" required>
        <br>
        <label for="guide">Guide Name:</label>
        <input type="text" id="guide" name="gd" value="<?php echo $dbrow["Tr_GuideName"];?>" required>
        <br>
        <label for="dep">Department:</label>
        <input type="text" id="dep" name="dp" value="<?php echo $dbrow["Tr_Dep"];?>" required>
        <br>

        <div class="feedback-link">
          <a href="feedback.html" class="text feedback-link">Click here to fill feedback</a>
        </div>
      </form>
    </div>

  </body>
</html>

<?php
}
?>