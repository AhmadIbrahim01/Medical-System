<?php
$puser = $_GET['user'];
$email = addslashes(strip_tags($_POST['pemail']));
$phone = addslashes(strip_tags($_POST['pphone']));
$password = addslashes(strip_tags($_POST['passw']));
$district = addslashes(strip_tags($_POST['acdist']));
$address = addslashes(strip_tags($_POST['paadd']));

include '../incs/connection.php';

$sql="UPDATE patients SET phone='$phone',email='$email',address='$address',district='$district',password='$password' WHERE username='$puser'";
mysqli_query($con,$sql);

header("location:../patsetting.php?pupd=1");
?>