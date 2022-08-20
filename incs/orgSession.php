<?php
if(!isset($_SESSION['suser']))
    header("location:login.php");
else
    echo "You are logged in as: " .$_SESSION['suser'];
?>