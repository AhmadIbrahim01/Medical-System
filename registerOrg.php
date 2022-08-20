<?php include "incs/nav.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Register Organization</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color:#92c9ff">

<div class="container h-90 d-flex align-items-center justify-content-center padding-top:10%"> 
<div style="background-color:white; border-radius:10px 10px 10px 200px;padding:10px 20px 50px 20px;
box-shadow: 0 5px 10px rgba(0,0,0,0.1);" class="container">

<form method="POST" action="actions/registeruserac.php" enctype="multipart/form-data" style="margin:0px 5% 0px">

    <h1 class="text-center">Register Your Organization</h1><hr><br>

    <div class="row">
      <div class="col-sm">
        <label>Organization Name</label>
        <input type="text" class="form-control" name="orgname" required>
      </div>
      <div class="col-sm">
        <label>Organization Owner Full Name</label>
        <input type="text" class="form-control" name="owfname" required>
      </div>      
      <div class="col-sm">
        <label>Organization Owner Phone</label>
        <input type="tel" class="form-control" name="owphone" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm">
        <label>Organization E-mail</label>
        <input type="email" class="form-control" name="orgemail" required>
      </div>
      <div class="col-sm">
        <label>Organization Owner E-mail</label>
        <input type="email" class="form-control" name="owemail" required>
      </div>      
      <div class="col-sm">
        <label>Organization Phone Number</label>
        <input type="tel" class="form-control" name="orgphone" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm">
        <label>Organization Location</label>
        <input type="text" class="form-control" name="orgaddress" required>
      </div> 
      <div class="col-sm">
        <label>Choose District</label>
            <select required class="form-control" name="orgdistrict">
            <option selected>Choose Disrict</option>
                <option>Beirut</option>
                <option>Saida</option>
                <option>Tyre</option>
                <option>Tripoli</option>
                <option>Bekaa</option>
                <option>Nabatieh</option>
                <option>Mont Lebanon</option>
            </select>
      </div>   
      <div class="col-sm">
            <label>Organization Official Certificate</label>
            <input class="form-control" type="file" name="orgimg" required>
      </div>
    </div><br>

<div class="row">
<div class="col-sm">
        <label>Login Username</label>
        <input type="text" class="form-control" name="username" required>
  </div>

  <div class="col-sm">
        <label>Login Password</label>
        <input type="password" class="form-control" name="pass" required>
  </div>

  <div class="col-sm">
        <label>Type</label>
        <select required class="form-control" name="accountType">
            <option selected>Choose Account Type</option>
            <option>Hospital</option>
            <option>Doctor</option>
            <option>Pharmacy</option>
        </select>
  </div>
</div>

    <div style="margin-top:2%;" class="container">
        <div class="row">
            <p>Have an account? <a href="login.php">Login Now</a></p>
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
      <img class="responsive" src="images/seven.png" >
      </div>
    </div>
    </div>
    
  </form>
</div>
</div>
  
</body>
</html>