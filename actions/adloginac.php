<?php
session_start();

$user = addslashes(strip_tags($_POST['user']));
$pass = addslashes(strip_tags($_POST['pass']));

include '../incs/connection.php';

  $sql = "SELECT * FROM admins WHERE username='$user' AND password='$pass'";
  $result= mysqli_query($con,$sql);
  
if(mysqli_num_rows($result)>0){
   $_SESSION['sess']=$user;
   header("location:../adcontrolcenter.php");
}
else {
   header("location:../adlogin.php?er=1");
}

?>