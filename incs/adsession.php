<?php
if(!isset($_SESSION['sess']))
    header("location:adlogin.php");
else
    echo"You are logged in as: " .$_SESSION['sess'];
?>