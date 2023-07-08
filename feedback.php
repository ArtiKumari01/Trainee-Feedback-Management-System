<?php 
session_start();
?>

<html>
<head>
    <title>Feedback Page</title>
    <link rel="stylesheet" href="feed.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="navbar">
        <ul>
            <li><a href="main.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
        <!-- <ul>
            <li><a href="login.html">Logout</a></li>
            <li><b><?php echo $dbrow["Tr_Name"];?></b></li>
        </ul> -->
    </div>
    <div class="form-container">
      <form action="http://localhost/SNTI_PROJECT/feed.php" method="post">
        <h3>Give your feedback</h3>
        <br>
        <br>
        <label for="email">Your SNTI registered Email ID :</label>
        <input type="email" id="email" name="em" value="<?php echo $_SESSION["uid"]; ?>" placeholder="Email ID" required>
        <br>
        <label for="num">Number of times training attended :</label>
        <select id="num" name="num" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <br>
        <div style="text-align: center;color: black;background-color: bisque;border-radius: 30px;">
        <p>1 : Very Good</p>
        <p>2 : Good</p>
        <p>3 : Fair</p>
        <p>4 : Bad</p>
        <p>5 : Very Bad</p>
        </div>
        <br>
        <p>How would you rate the overall quality of this training session ?</p>
        <label for="feed1">5</label>
        <input type="radio" id="feed1" name="feedback1" value="5"><br>
        <label for="feed1">4</label>
        <input type="radio" id="feed1" name="feedback1" value="4"><br>
        <label for="feed1">3</label>
        <input type="radio" id="feed1" name="feedback1" value="3"><br>
        <label for="feed1">2</label>
        <input type="radio" id="feed1" name="feedback1" value="2"><br>
        <label for="feed1">1</label>
        <input type="radio" id="feed1" name="feedback1" value="1">
        <br>
        <br>
        <p>Was the training program interactive and engaging ?</p>
        <label for="feed2">5</label>
        <input type="radio" id="feed2" name="feedback2" value="5"><br>
        <label for="feed2">4</label>
        <input type="radio" id="feed2" name="feedback2" value="4"><br>
        <label for="feed2">3</label>
        <input type="radio" id="feed2" name="feedback2" value="3"><br>
        <label for="feed2">2</label>
        <input type="radio" id="feed2" name="feedback2" value="2"><br>
        <label for="feed2">1</label>
        <input type="radio" id="feed2" name="feedback2" value="1">
        <br>
        <br>
        <p>Do you feel you were given enough time and resources to complete the training ?</p>
        <label for="feed3">5</label>
        <input type="radio" id="feed3" name="feedback3" value="5"><br>
        <label for="feed3">4</label>
        <input type="radio" id="feed3" name="feedback3" value="4"><br>
        <label for="feed3">3</label>
        <input type="radio" id="feed3" name="feedback3" value="3"><br>
        <label for="feed3">2</label>
        <input type="radio" id="feed3" name="feedback3" value="2"><br>
        <label for="feed3">1</label>
        <input type="radio" id="feed3" name="feedback3" value="1">
        <br>
        <br>
        <p>Overall, how would you rate the training ?</p>
        <label for="feed4">5</label>
        <input type="radio" id="feed4" name="feedback4" value="5"><br>
        <label for="feed4">4</label>
        <input type="radio" id="feed4" name="feedback4" value="4"><br>
        <label for="feed4">3</label>
        <input type="radio" id="feed4" name="feedback4" value="3"><br>
        <label for="feed4">2</label>
        <input type="radio" id="feed4" name="feedback4" value="2"><br>
        <label for="feed4">1</label>
        <input type="radio" id="feed4" name="feedback4" value="1">
        <br>
        <br>
        <p>Was the training program well organized and easy to follow ?</p>
        <label for="feed5">5</label>
        <input type="radio" id="feed4" name="feedback5" value="5"><br>
        <label for="feed5">4</label>
        <input type="radio" id="feed4" name="feedback5" value="4"><br>
        <label for="feed5">3</label>
        <input type="radio" id="feed4" name="feedback5" value="3"><br>
        <label for="feed5">2</label>
        <input type="radio" id="feed4" name="feedback5" value="2"><br>
        <label for="feed5">1</label>
        <input type="radio" id="feed4" name="feedback5" value="1">
        <br>
        <br>
        <label for="">Remarks :</label>
        <textarea name="remk" id="" cols="20" rows="3" placeholder="Your Answer" ></textarea>
        <br>
        <input type="submit" value="Submit">
      </form>
    </div>
    <footer>
      <p>Created by <b>Arti Kumari</b> | &#169; 2023 All rights reserved.</p>
  </footer>
</body>
</html>