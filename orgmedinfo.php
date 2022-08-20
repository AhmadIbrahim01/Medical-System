<?php session_start(); ?>
<?php include 'incs/nav2.php'; ?>
<?php include 'incs/orgSession.php'; ?>
<?php   $id = $_GET['id'];
        $user = $_GET['user']; ?>

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
    <title>Medicine Paper Info</title>
</head>

<body>
    <br>
    <br>

    <div class="bord">
    <?php
        include 'incs/connection.php';
        
        $sql = "SELECT * FROM medicinepaper WHERE PAPID='$id'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result); ?>

    <h6>Paper ID: <?php echo $id; ?></h2>


    <h6>Organization Name: <?php echo $row['organizaionName']; ?></h6>
    <h6>Organization Phone: <?php echo $row['organizaionPhone']; ?></h6>

    <h6>Docor Name: <?php echo $row['doctorName']; ?></h6>
    <h6>Patient Username: <?php echo $row['patuser']; ?></h6>
    <h6>Write date: <?php echo $row['writeDate']; ?></h6>
    <h6>Organization Username: <?php echo $row['orgusername']; ?></h6>
    <h6>Status: <?php echo $row['status']; ?></h6>
    <h6>Medicines: <?php echo $row['medicines']; ?></h6><br>
    <h6>Dosage & Usage: <?php echo $row['dosage']; ?></h6><br><br>

    <div class="row ml-4">
    <?php echo"<a href=orgPatientFile.php?user=$user><button type='submit' class='btn btn-outline-primary margins'>Back</button></a>"; ?>
    </div><br><br> 
    </div>
    
</body>
</html>