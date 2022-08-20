<?php
$gname = addslashes(strip_tags($_POST['guestname']));
$gemail = addslashes(strip_tags($_POST['guestemail']));
$gissue = addslashes(strip_tags($_POST['guestissue']));

if($gname=="" or $gemail=="" or $gissue==""){
    header("location:../contactUs.php?ms=1");
}

include '../incs/connection.php';

$sql="INSERT INTO contact(name, email, issue) VALUES ('$gname','$gemail','$gissue')";
mysqli_query($con,$sql);

header("location:../contactUs.php?cont=1");
?>