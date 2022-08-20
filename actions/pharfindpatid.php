<?php
$finame = addslashes(strip_tags($_POST['finame']));
$patid = addslashes(strip_tags($_POST['pid']));

include '../incs/connection.php';

$sql="SELECT * FROM patients WHERE firstname='$finame' AND pid='$patid'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $puser = $row['username'];
    header("location:../pharpatientfile.php?user=$puser");
}
?>