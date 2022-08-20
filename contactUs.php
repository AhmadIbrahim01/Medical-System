<?php include "incs/nav.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color:#92c9ff">

<div class="container h-90 d-flex align-items-center justify-content-center"> 
<div style="background-color:white; border-radius:10px 10px 10px 200px;padding:10px 20px 50px 20px;
box-shadow: 0 5px 10px rgba(0,0,0,0.1);" class="container mt-3">

<form method="POST" action="actions/contactaction.php" style="margin:0px 5% 0px">
    <h1 class="text-center">Contact Us</h1><hr><br>

    <div class="row">
    <div class="col-4 h-90 d-flex align-items-center justify-content-center">
    <label>Full Name</label>
      </div>
      <div class="col-4">
        <input type="text" class="form-control" name="guestname" required>
      </div> 
      <div class="col-4"></div>     
    </div><br>

    <div class="row">
    <div class="col-4 h-90 d-flex align-items-center justify-content-center">
    <label>Email Address</label>
      </div>
      <div class="col-4">
        <input type="email" class="form-control" name="guestemail" required>
      </div>    
      <div class="col-4"></div>  
    </div><br>

    <div class="row">
    <div class="col-4 h-90 d-flex align-items-center justify-content-center">
    <label>Write Your Issue</label>
      </div>
      <div class="col-4">
        <input style="height:120px" type="text" class="form-control" name="guestissue" required>
      </div> 
      <div class="col-4"></div>     
    </div><br>

    <div class="container">
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4 h-90 d-flex align-items-center justify-content-center">
      <button class="btn btn-primary" style="background-color:#5276d4" type="submit">Submit</button>
      </div> 
      <div class="col-4">
      <img class="w-100 p-6" src="images/login.png" >
      </div>
    </div>
    </div>
    
  </form> 
</div>
</div>

<?php
  if(isset($_GET['cont'])){
    echo '<script>alert("Thanks For Contact Us, Your Message Is Recieved To Us")</script>'; }
?>
  
</body>
</html>