<?php 
session_start(); 
include 'incs/adsession.php';
$aduser = $_SESSION['sess'];

include '../incs/connection.php';

$sql="SELECT * FROM admins WHERE username='$aduser'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

if($row['type'] == "owner"){
    header("location:../addnewadmin.php?");
}

else{
    header("location:../adcontrolcenter.php?nonow=1");
}
?>