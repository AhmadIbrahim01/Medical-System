<?php
$id = $_GET['id'];
include '../incs/connection.php';
$sql1 = "SELECT status FROM patients WHERE pid='$id'";
$result = mysqli_query($con,$sql1);
if($result="new"){
$sql = "UPDATE patients SET status='Disabled' WHERE pid='$id'";
mysqli_query($con,$sql);
header("location:../usercenter.php?di=1");}
else{
    header("location:../usercenter.php?ns=1");
}
?>