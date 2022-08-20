<?php
$orauser = $_GET['user'];
$oraname = addslashes(strip_tags($_POST['oraname']));
$oraemail = addslashes(strip_tags($_POST['oraemail']));
$oraphone = addslashes(strip_tags($_POST['oraphone']));
$owname = addslashes(strip_tags($_POST['owname']));
$owemail = addslashes(strip_tags($_POST['owemail']));
$owph = addslashes(strip_tags($_POST['owph']));
$passw = addslashes(strip_tags($_POST['passw']));
$acdist = addslashes(strip_tags($_POST['acdist']));
$oraddd = addslashes(strip_tags($_POST['oraddd']));

include '../incs/connection.php';

$sql="UPDATE userinfo SET name='$oraname',email='$oraemail',phonenumber='$oraphone',ownername='$owname',owneremail='$owemail',ownerphone='$owph',address='$oraddd',district='$acdist',password='$passw' WHERE username='$orauser'";
mysqli_query($con,$sql);

header("location:../orgsettings.php?upd=1");
?>