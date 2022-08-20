<?php
if(!isset($_SESSION['spat']))
    header("location:login.php");
else
    $sese = $_SESSION['spat'];
    echo "You are logged in as: " .$sese;
?>