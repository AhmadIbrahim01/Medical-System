<?php
$id = $_GET['id'];
include '../incs/connection.php';
$sql = "UPDATE userinfo SET status='Active' WHERE userID='$id'";
mysqli_query($con,$sql);
header("location:../registrationCenter.php?su=1");
?>