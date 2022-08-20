<?php
session_start();

$user = $_GET['user'];
$pass = $_GET['pass'];

include '../incs/connection.php';

$sql="SELECT * FROM patients WHERE username='$user' AND password='$pass'";
$validation = mysqli_query($con,$sql);

if(mysqli_num_rows($validation)>0){
    $_SESSION['spat']=$user;
    header("location:../patientFile.php");
}

else {
    header("location:../login.php?wrong=1"); }
?>