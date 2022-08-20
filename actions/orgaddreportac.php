<?php

$docname = addslashes(strip_tags($_POST['docnamee']));
$rep = addslashes(strip_tags($_POST['rep']));
$puser = $_GET['puser'];

$rdate = date('m/d/Y h:i:s a', time());
$ouser = $_GET['user'];

include '../incs/connection.php';

$sqlzero = "SELECT * FROM userinfo WHERE username='$ouser'";
$reszero = mysqli_query($con,$sqlzero);
$row = mysqli_fetch_assoc($reszero);
$orgn = $row['name'];
$orgph = $row['phonenumber'];

$sql="INSERT INTO reports(patuser, orauser, orgname, orgphone, doctorname, date, report) VALUES ('$puser','$ouser','$orgn','$orgph','$docname','$rdate','$rep')";
mysqli_query($con,$sql);

header("location:../orgPatientFile.php?rep=1&user=$puser");
?>