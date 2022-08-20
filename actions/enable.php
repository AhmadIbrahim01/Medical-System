<?php
$id = $_GET['id'];
include '../incs/connection.php';
$sql1 = "SELECT status FROM userinfo WHERE userID='$id'";
$result = mysqli_query($con,$sql1);
if($result="disabled"){
$sql = "UPDATE userinfo SET status='Active' WHERE userID='$id'";
mysqli_query($con,$sql);
header("location:../usercenter.php?en=1");}
else{
    header("location:../usercenter.php?no=1");
}
?>