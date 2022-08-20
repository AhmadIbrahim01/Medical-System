<?php
session_start();

$type = addslashes(strip_tags($_POST['actype']));
$user = addslashes(strip_tags($_POST['user']));
$pass = addslashes(strip_tags($_POST['passw']));

if($type ==="Patient"){
    header("location:loginptac.php?user=$user&pass=$pass");
}

elseif($type ==="Pharmacy"){
    header("location:loginpharaction.php?user=$user&pass=$pass&type=$type");
}

elseif($user==="Admin" and $pass==="Admin"){
    header("location:../adlogin.php");
}

else{

include '../incs/connection.php';

$sql="SELECT * FROM userinfo WHERE username='$user' AND password='$pass' AND type='$type' AND status='Active'";
$validation = mysqli_query($con,$sql);

if(mysqli_num_rows($validation)>0){
    $_SESSION['suser']=$user;
    header("location:../findPatient.php");
}

else {
    header("location:../login.php?wrong=1");
 }
}
?>