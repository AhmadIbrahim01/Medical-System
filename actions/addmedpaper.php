<?php
$docname = addslashes(strip_tags($_POST['docname']));
$med = addslashes(strip_tags($_POST['med']));
$dos = addslashes(strip_tags($_POST['dos']));
$puser = $_GET['puser'];

$rdate = date('m/d/Y h:i:s a', time());
$tdate = "empt";
$ouser = $_GET['user'];
$given = "empt";
$stat = "nonTaked";

include '../incs/connection.php';

$sqlzero = "SELECT * FROM userinfo WHERE username='$ouser'";
$reszero = mysqli_query($con,$sqlzero);
$row = mysqli_fetch_assoc($reszero);
$orgn = $row['name'];
$orgph = $row['phonenumber'];

$sql="INSERT INTO medicinepaper(organizaionName, organizaionPhone, doctorName, medicines, dosage, patuser, writeDate, takedDate, orgusername, givenByUser, status) VALUES ('$orgn','$orgph','$docname','$med','$dos','$puser','$rdate','$tdate','$ouser','$given','$stat')";
mysqli_query($con,$sql);

header("location:../orgPatientFile.php?mp=1&user=$puser");
?>