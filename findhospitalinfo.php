<?php include 'incs/nav.php';
       $user = $_GET['user'] ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/issueinfo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Center Info</title>
</head>

<body>
    <?php
    include 'incs/connection.php';
    $query = "SELECT * FROM userinfo WHERE username='$user'";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    ?>
    <br><br><br><center>
    <h2 class="zee">Organization Name: <?php echo $row['name']; ?></h2>
    <h2 class="zee">Organization Address: <?php echo $row['address']; ?></h2>
    <h2 class="zee">Organization Phone Number: <?php echo $row['phonenumber']; ?></h2>
    <h2 class="zee">Organization Email: <?php echo $row['email']; ?></h2>
    <h2 class="zee">Organization District: <?php echo $row['district']; ?></h2>
    <h2 class="zee">Organization Type: <?php echo $row['type']; ?></h2>
    </center>
    <br><br>

</body>
</html>