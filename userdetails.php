<?php session_start(); ?>
<?php include 'incs/adnav.php'; ?>
<?php include 'incs/adsession.php';
$id = $_GET['id']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addnewadmin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>User Information</title>
</head>

<body>
    <br><br>

    <div class="bord">
    <?php
        include 'incs/connection.php';
        
        $sql = "SELECT * FROM userinfo WHERE userID='$id'";
        
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result); ?>

    <h6>ID: <?php echo $id; ?></h2>
    <h6>Org Name: <?php echo $row['name']; ?></h6>
    <h6>Org Email: <?php echo $row['email']; ?></h6>
    
    <h6>Org Phone: <?php echo $row['phonenumber']; ?></h6>
    <h6>Owner Name: <?php echo $row['ownername']; ?></h6>
    <h6>Owner Email: <?php echo $row['owneremail']; ?></h6>

    <h6>Owner Phone: <?php echo $row['ownerphone']; ?></h6>
    <h6>Org Address: <?php echo $row['address']; ?></h6>
    <h6>Org District: <?php echo $row['district']; ?></h6>

    <h6>Org type: <?php echo $row['type']; ?></h6>
    <h6>Registration Date: <?php echo $row['registration_date']; ?></h6>
    <h6>Account Username: <?php echo $row['username']; ?></h6>

    <h6>Account Status: <?php echo $row['status']; ?></h6>
    <h6>Account Password: <?php echo $row['password']; ?></h6>
    <?php
    echo "<h6>Certificate Image: <a href=userimage/".$row['certificateimgName']." target=_blank> Click Here</a></h6>";
    ?>

    <div class="row">
    <?php echo"<a href=actions/enable.php?id=".$id."><button type='submit' class='btn btn-outline-primary margins'>Enable</button></a>";
    echo"<a href=actions/disable.php?id=".$id."><button type='submit' class='btn btn-outline-danger margins2'>Disable</button></a>" ?>
    </div><br><br> 
    </div>
    
</body>
</html>