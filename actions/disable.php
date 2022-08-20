<?php
$id = $_GET['id'];
include '../incs/connection.php';
$sql1 = "SELECT status FROM userinfo WHERE userID='$id'";
$result = mysqli_query($con,$sql1);
if($result="active"){
$sql = "UPDATE userinfo SET status='Disabled' WHERE userID='$id'";
mysqli_query($con,$sql);
header("location:../usercenter.php?di=1");}
else{
    header("location:../usercenter.php?ns=1");
}
?>