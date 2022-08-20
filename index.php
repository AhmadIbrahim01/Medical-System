<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
<?php include 'incs/endnav.php'?>
<div style="background-color: #92c9ff;" class="container-fluid"><BR><BR><BR><BR><BR><BR></div>
<div style="background-color: #92c9ff;" class="container-fluid">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
        <div id="one">
            <img style="bottom:50px;" class="doctorimage"  src="images/doctor.png">
        </div>
        </div>
        <div class="col-lg-5">
                <div class="two">Find Hospitals, Health Clinics and Medical Centers</div>
                <div class="three">
                    <p style="margin-top: 4%;">Buy Your Medics and Get Your Report Easily</p>
                    <p style="font-size: 20px;">Good health is a state of mental well being</p>                    
                </div>
                <a href="findHospital.php"><button class="five">Find Hospital Now</button></a>
        </div>
        <div class="col-lg-1"></div>

    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5 ">
            <div class="circle1"></div>
            <h1>Why Our Service Is<br> So Important For All<br> People</h1>
            <h4>We are making an easy way to get your<br> medications sheet and medical reports<br> from your doctor or hospital</h4>
            <div class="circle2"></div>
            <a href="login.php"><button style="float: left;" class="five">See Your Medical Profile</button></a>

        </div>
        <div class="col-lg-5 h-90 d-flex align-items-center justify-content-center">
            <div class="rectangle mt-5 mx-auto"><img class="medimg" src="images/med.png" alt=""></div>
        </div>
        <div class="col-lg-1"></div>

    </div>
</div>

<div style="background-color: #ddd;" class="container-fluid mt-5">
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5 mt-5">
            <div class="row">
                <div class="col-6 square mt-5 me-5"><img class="fourimg" src="images/four.png"><p class="fourp">Hospitals</p></div>
                <div class="col-6 square"><img class="fourimg" src="images/one.png"><p class="fourp">Pharmacy</p></div>
            </div>
            <div class="row">
                <div class="col-6 square mt-5 me-5"><img class="fourimg" src="images/two.png"><p class="fourp">Doctors</p></div>
                <div class="col-6 square"><img class="fourimg" src="images/three.png"><p class="fourp">Medical Cen.</p></div>
            </div>
        </div>
        <div class="col-lg-5 text-center mt-5">
            <h1>Who Can Use Our<br>Service</h1>
            <h4>All people in Lebanon can use our<br>website services, we are including<br> hospitals, private doctors,medical<br> centers and pharmacies</h4>
            <a href="registerOrg.php"><button type="button" class="five mt-5">Sign Up Now</button></a>
        </div>
        <div class="col-lg-1"></div>
    </div><br>
</div>
<?php include 'footer.php'?>

<?php
        if(isset($_GET['re'])){
            echo '<script>alert("Your Accoun Has Been Registered Succesfull, Wait The Admission Acceptance To Login")</script>';
        }
        ?>

</body>
</html>