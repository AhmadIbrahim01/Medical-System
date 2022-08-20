<?php
session_start();

$type = $_GET['type'];
$user = $_GET['user'];
$pass = $_GET['pass'];

include '../incs/connection.php';

$sql="SELECT * FROM userinfo WHERE username='$user' AND password='$pass' AND type='$type' AND status='Active'";
$validation = mysqli_query($con,$sql);

if(mysqli_num_rows($validation)>0){
    $_SESSION['phuser']=$user;
    header("location:../pharfindpat.php");
}

else {
    header("location:../login.php?wrong=1");
 }
?>