<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find Clenical Center</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/findHospital.css">
</head>

<body>
<?php include 'incs/nav.php' ?>

<div class="container mt-4">
<form class="form-inline my-2 my-lg-0" method="POST" action="findHospital.php">
    <div class="row">
      <input type="text" name="search" class="form-control mr-sm-2" placeholder="Search By Name" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </div>
</form>
<br><br><br>

<?php
    if(isset($_POST['search'])){
        include 'incs/connection.php';
        $key = $_POST['search'];
        $sql = "SELECT * FROM userinfo WHERE name like '%$key%'";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($res);
        $usernamee = $row['username'];
 
    echo "<br><br><br><center><div class=col-sm-6>
      <div class=card>
      <center>
      <div class=card-body>
        <h5 class=card-title>".$row['name']." ".$row['type']."</h5><br>
        <a href=findhospitalinfo.php?user=$usernamee class='btn btn-primary'>More Details</a>
      </div>
      </center>
      </div>
      </div></center>"; } ?>
</body>
</html>