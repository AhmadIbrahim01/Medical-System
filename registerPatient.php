<?php include "incs/nav.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Register Patient</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color:#92c9ff">

<div class="container h-90 d-flex align-items-center justify-content-center"> 
<div style="background-color:white; border-radius:10px 10px 10px 200px;padding:10px 20px 50px 20px;
box-shadow: 0 5px 10px rgba(0,0,0,0.1);" class="container-sm">

<form method="POST" action="actions/registerPatientaction.php" style="margin:0px 5% 0px">

    <h1 class="text-center">Register Your Account<br>(Patient)</h1><hr><br>

    <div class="row">
      <div class="col-sm">
        <label>Patient First Name</label>
        <input type="text" class="form-control" name="firstName" required>
      </div>
      <div class="col-sm">
        <label>Patient Last Name</label>
        <input type="text" class="form-control" name="lastName" required>
      </div>      
      <div class="col-sm">
        <label>Patient Phone Number</label>
        <input type="tel" class="form-control" name="phone" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm">
        <label>Patient Mother's Name</label>
        <input type="text" class="form-control" name="mname" required>
      </div>
      <div class="col-sm">
        <label>Patient Father's Name</label>
        <input type="text" class="form-control" name="fname" required>
      </div>      
      <div class="col-sm">
        <label>Patient Email Address</label>
        <input type="email" class="form-control" name="email" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm">
        <label>Patient Address</label>
        <input type="text" class="form-control" name="location" required>
      </div> 
 
      <div class="col-sm">
            <label>Choose District</label>
            <select required name="district" required>
                <option disabled selected>Choose District</option>
                <option>Beirut</option>
                <option>Saida</option>
                <option>Tyre</option>
                <option>Tripoli</option>
                <option>Bekaa</option>
                <option>Nabatieh</option>
                <option>Mont Lebanon</option>
            </select> </div>

      <div class="col-sm">
        <label>Login Username</label>
        <input type="text" class="form-control" name="username" required>
      </div>
    </div><br>

      <div class="col-sm">
        <label>Login Password</label>
        <input type="password" class="form-control" name="pass" required>
      </div>

    <div style="margin-top:2%;" class="container">
        <div class="row">
            <p>Have an account? <a href="../login.php">Login Now</a></p>
        </div>
    </div>

    <div class="container">
    <div class="row">
      <div class="col-4 h-100 d-flex align-items-center justify-content-center">
      <img class="responsive" src="images/six.png" >
      </div>
      <div class="col-4 h-90 d-flex align-items-center justify-content-center">
      <button class="btn btn-primary" style="background-color:#5276d4" type="submit">Register</button>
      </div>      
      <div class="col-4 h-100 d-flex align-items-center justify-content-center">
      </div>
    </div>
    </div>
    
  </form>
</div>
</div>

<?php
if(isset($_GET['suc'])){
  echo '<script>alert("Account Registered Wait The Admission Acceptance Before Login")</script>'; }
?>
  
</body>
</html>