<?php
$fullname = addslashes(strip_tags($_POST['fullname']));
$email = addslashes(strip_tags($_POST['email']));
$phone = addslashes(strip_tags($_POST['phone']));
$adusername = addslashes(strip_tags($_POST['username']));
$password = addslashes(strip_tags($_POST['pass']));
$adtype = addslashes(strip_tags($_POST['adtype']));

if($fullname=="" or $email=="" or $adusername=="" or $password=="" or $adtype=="Select the admin type"){
    header("location:../addnewadmin.php?ms=1");
}

include '../incs/connection.php';

$sql="INSERT INTO admins(fullname, email, phone, username, password, type) VALUES ('$fullname','$email','$phone','$adusername','$password','$adtype')";
mysqli_query($con,$sql);

header("location:../addnewadmin.php?su=1");
?>