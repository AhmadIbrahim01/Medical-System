<?php

if(isset($_FILES['orgimg'])){

    $finame = $_FILES['orgimg']['name'];
    $fisize = $_FILES['orgimg']['size'];
    $fitmp = $_FILES['orgimg']['tmp_name'];
    $fitype = $_FILES['orgimg']['type'];

    $str=explode('.',$_FILES['image']['name']);
    $file_extension = strtolower(end($str));
    $exts = array("jpeg","jpg","png");

    $name = addslashes(strip_tags($_POST['orgname']));
    $email = addslashes(strip_tags($_POST['orgemail']));
    $phone = addslashes(strip_tags($_POST['orgphone']));
    $ownername = addslashes(strip_tags($_POST['owfname']));
    $owneremail = addslashes(strip_tags($_POST['owemail']));
    $ownerphone = addslashes(strip_tags($_POST['owphone']));
    $address = addslashes(strip_tags($_POST['orgaddress']));
    $district = addslashes(strip_tags($_POST['orgdistrict']));
    $certificateName = $_FILES['orgimg']['name'];
    $username = addslashes(strip_tags($_POST['username']));
    $pass = addslashes(strip_tags($_POST['pass']));;
    $type = addslashes(strip_tags($_POST['accountType']));

    $status = "new";
    $date = date('m/d/Y h:i:s a', time());
    
    move_uploaded_file($fitmp,"../userimage/".$finame);
    
    include '../incs/connection.php';
    $sql="INSERT INTO userinfo(username, name, email, phonenumber, ownername, owneremail, ownerphone, address, district, type, certificateimgName, status, registration_date, password) VALUES ('$username','$name','$email','$phone','$ownername','$owneremail','$ownerphone','$address','$district','$type','$certificateName','$status','$date','$pass')";
    mysqli_query($con,$sql);

    header("location:../index.php?re=1");
    }

    else
    header("location:../registerOrg.php?im=1");
?>