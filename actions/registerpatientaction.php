<?php
$firstname = addslashes(strip_tags($_POST['firstName']));
$lastname = addslashes(strip_tags($_POST['lastName']));
$phonenum = addslashes(strip_tags($_POST['phone']));
$mothername = addslashes(strip_tags($_POST['mname']));
$fathername = addslashes(strip_tags($_POST['fname']));
$patientemail = addslashes(strip_tags($_POST['email']));
$address = addslashes(strip_tags($_POST['location']));
$district = addslashes(strip_tags($_POST['district']));
$username = addslashes(strip_tags($_POST['username']));
$pass = addslashes(strip_tags($_POST['pass']));
$status = "new";
$date = date('m/d/Y h:i:s a', time());
$type = "Patient";

include '../incs/connection.php';

$sql="INSERT INTO patients(username, firstname, lastname, mothername, fathername, phone, email, address, district, status, registrationDate,password,type) VALUES ('$username','$firstname','$lastname','$mothername','$fathername','$phonenum','$patientemail','$address','$district','$status','$date','$pass','$type')";
mysqli_query($con,$sql);

header("location:../registerPatient.php?suc=1");
?>