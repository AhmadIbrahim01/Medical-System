<?php session_start(); ?>
<?php include 'incs/nav2.php'; ?>
<?php include 'incs/orgSession.php'; ?>
<?php $user = $_GET['user']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Patient File</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/patientfile.css">
</head>

<body>
<h1 style="text-align:center;color:#5276d4;padding-bottom:1%">Patient File</h1>

<div class="container">
    <div class="row">
        
        <div class="col-4">
        <div class="dropdown">
            <button id="plusbutton" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                <img class="imgplus" src="images/plus.png" alt="">
            </button>
            <ul class="dropdown-menu">
                <li><?php echo "<a class=dropdown-item href=orgaddmed.php?user=$user>Add Medicines</a>" ?></li>
                <li><?php echo "<a class=dropdown-item href=orgaddreport.php?user=$user>Add Reports</a>" ?></li>
            </ul>
        </div>
        </div>
        
        <?php
            include 'incs/connection.php';
            $sql = "SELECT * FROM patients WHERE username='$user'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($result);
            $patname = $row['firstname']." ".$row['lastname'];
        ?>

        <div class="col-4"><h1 style="text-align: center;"><?php echo $patname;?></h1></div>
        <div class="col-4"></div>
    </div>
</div>

<div class="container h-75 d-flex align-items-center justify-content-centers">
    <div class="container">
    <div class="row ">
        <div class="col-3"></div> <style>a{text-decoration: none;}a:hover{text-decoration: none;}</style>
        <div class="col-3"><?php echo "<a href=orgmedtaked.php?user=$user>"?><button>Medicine Taked</button></a></div>
        <div class="col-3"><?php echo "<a href=orgmedneeded.php?user=$user>"?><button>Medicine Needed</button></a></div>
        <div class="col-3"></div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"><?php echo "<a href=orgreport.php?user=$user>"?><button>Reports</button></a></div>
        <div class="col-4"></div>
    </div>
</div>
</div>

<?php
        if(isset($_GET['mp'])){
            echo '<script>alert("Paper Added To The Patient")</script>';
        }
        elseif(isset($_GET['rep'])){
            echo '<script>alert("Report Added To The Patient")</script>';
        }
        ?>

</body>
</html>