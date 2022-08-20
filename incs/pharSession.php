<?php
if(!isset($_SESSION['phuser']))
    header("location:login.php");
else
    echo "You are logged in as: " .$_SESSION['phuser'];
?>