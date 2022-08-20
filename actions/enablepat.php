<?php
$id = $_GET['id'];
include '../incs/connection.php';
$sql1 = "SELECT status FROM patients WHERE pid='$id'";
$result = mysqli_query($con,$sql1);
if($result="Disabled"){
$sql = "UPDATE patients SET status='new' WHERE pid='$id'";
mysqli_query($con,$sql);
header("location:../usercenter.php?en=1");}
else{
    header("location:../usercenter.php?no=1");
}
?>