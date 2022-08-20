<?php
$puser = $_GET['user'];
$papid = $_GET['paid'];
$byUser = $_GET['byUser'];
$tkdate = date('m/d/Y h:i:s a', time());
$stat = "taked";

include '../incs/connection.php';

$sql="UPDATE medicinepaper SET takedDate='$tkdate',givenByUser='$byUser',status='$stat' WHERE patuser='$puser' AND PAPID='$papid'";
$result = mysqli_query($con,$sql);
    header("location:../pharmedneed.php?user=$puser&sold=1");

?>