<?php session_start(); ?>
<?php include 'incs/adnav.php'; ?>
<?php include 'incs/adsession.php'; ?>
<?php $id = $_GET['id']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/issueinfo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Description</title>
</head>

<body>
    <center><br><h2 class="bordb">Issue Description</h2><br></center>

    <h5 class="zee">ID: <?php echo $id; ?></h5>
    <?php
    include 'incs/connection.php';
    $query = "SELECT * FROM contact WHERE id='$id'";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    ?>
    <h5 class="zee">name: <?php echo $row['name']; ?></h5>
    <h5 class="zee">email: <?php echo $row['email']; ?></h5><br>
    <P class="zee">description:<br><?php echo $row['issue']; ?></P><br><br>

</body>
</html>