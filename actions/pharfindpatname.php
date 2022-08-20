<?php
$fname = addslashes(strip_tags($_POST['fname']));
$lname = addslashes(strip_tags($_POST['lname']));
$faname = addslashes(strip_tags($_POST['faname']));
$mname = addslashes(strip_tags($_POST['mname']));

include '../incs/connection.php';

$sql="SELECT * FROM patients WHERE firstname='$fname' AND lastname='$lname' AND mothername='$mname' AND fathername='$faname'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $puser = $row['username'];
    header("location:../pharpatientfile.php?user=$puser");
}
?>