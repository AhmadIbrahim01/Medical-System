<?php session_start(); ?>
<?php include 'incs/adnav.php'; ?>
<?php include 'incs/adsession.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adcontrolcenter.css">
    <title>Admin Control Panel</title>
</head>

<body>
<div class="container">
<br>
    <center>
        <div class="bordb">
            <h2>Admin Control Panel</h2>
        </div>
    </center>
<br><br>

<center>
<div class="row">
  <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card">
    <div class="card-body">
    <h5 class="card-title">Add New Admin</h5>
    <br>
    <a href="actions/addnewadminactionn.php" class="btn btn-primary">Lets Go</a>
    </div>
    </div>
  </div>

<div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card">
    <div class="card-body">
    <h5 class="card-title">User Center</h5>
    <br>
    <a href="usercenter.php" class="btn btn-primary">Lets Go</a>
    </div>
    </div>
  </div>

  <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card">
    <div class="card-body">
    <h5 class="card-title">Registration Center</h5>
    <br>
    <a href="registrationCenter.php" class="btn btn-primary">Lets Go</a>
    </div>
    </div>
  </div>
</div>
  
  <div class="row mt-3">
  <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card">
    <div class="card-body">
    <h5 class="card-title">Users Issues</h5>
    <br>
    <a href="adviewissue.php" class="btn btn-primary">Lets Go</a>
    </div>
    </div>
  </div>

  <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card">
    <div class="card-body">
    <h5 class="card-title">Admins List</h5>
    <br>
    <a href="actions/viewadminactionn.php" class="btn btn-primary">Lets Go</a>
    </div>
    </div>
  </div>

  <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="card">
    <div class="card-body">
    <h5 class="card-title">View Patients</h5>
    <br>
    <a href="patientcenter.php" class="btn btn-primary">Lets Go</a>
    </div>
    </div>
  </div>
  
</div>
</div>
</center>
</div>

<?php
if(isset($_GET['nonow'])){
  echo '<script>alert("You are not owner admin you cannot access this page")</script>'; }
?>

</body>
</html>