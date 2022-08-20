<?php session_start(); ?>
<?php include 'incs/nav2.php'; ?>
<?php include 'incs/orgSession.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Find Patient</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/findPatient.css">
</head>

<body>
<h1 style="text-align:center;color:#5276d4;padding:20px 0px">Find Patient</h1>

    <div class="container-sm">

    <div class="row h-90 d-flex align-items-center justify-content-center">
    <div id="box1" class="col-6 ">
    <form style="margin:0px 5% 0px" method="POST" action="actions/findpatnameac.php">
        <h1 style="text-align: center; margin-top:10%">By Name</h1>
        <div class="row">
            <div class="col-6 h-90 d-flex align-items-center justify-content-center"><input class="one" style="border:none;" type="search" placeholder="First Name"  name="fname" required></div>
            <div class="col-6 h-90 d-flex align-items-center justify-content-center"><input class="one" style="border:none;" type="search" placeholder="Last Name"  name="lname" required></div>
        </div>
        <br>
        <div class="row">
            <div class="col-6 h-90 d-flex align-items-center justify-content-center"><input class="one" style="border:none;" type="search" placeholder="Father Name"  name="faname" required></div>
            <div class="col-6 h-90 d-flex align-items-center justify-content-center"><input class="one" style="border:none;" type="search" placeholder="Mother Name"  name="mname" required></div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 h-90 d-flex align-items-center justify-content-center"><button>Search</button></div>
        </div>
        </div>
        </form>
        <div id="box2" class="col-6">

        <form method="POST" action="actions/findpatidac.php">
        <h1 style="text-align: center; margin-top:10%">By ID</h1>

        <div class="row">
            <div class="col-12 h-90 d-flex align-items-center justify-content-center"><input class="one" style="border:none;" type="search" placeholder="Patient First Name"  name="finame" ></div>
        </div>
        <div class="row">
            <div class="col-12 h-90 d-flex align-items-center justify-content-center"><input class="one" style="border:none;" type="search" placeholder="Patient ID"  name="pid" ></div>
        </div>
        <div class="row">
            <div class="col-12 h-90 d-flex align-items-center justify-content-center"><button>Search</button></div>
        </div>
        </div>
        </form>
    </div>
    </div>

</body>
</html>