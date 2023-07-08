<?php
session_start();
session_destroy();
header("location: http://localhost/SNTI_PROJECT/login.html");
exit();
?>