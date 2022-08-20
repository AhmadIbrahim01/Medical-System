<?php

$con = mysqli_connect("localhost","root", "","medicalsystem");

   if (mysqli_connect_errno()){
     die("Failed to connect to the DataBase: " . mysqli_connect_error());
     }

?>