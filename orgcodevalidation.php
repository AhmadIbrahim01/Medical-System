<?php session_start(); ?>
<?php include 'incs/nav2.php'; ?>
<?php include 'incs/orgSession.php'; ?>
<?php $id = $_GET['id'];
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
    <title>Code Validation</title>
</head>

<body>
<center><br><br><br><br><br><br><br><br>

<form method="POST" action="actions/validatecodeaction.php" class="form-inline">
  <div class="form-group offset-md-0">
    <label for="staticEmail2" class="sr-only">Code</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input name="code" type="password" class="form-control" id="inputPassword2" placeholder="Enter Paper Code">
  </div>

  <div class="form-group mx-sm-3 mb-2 offset-md-3">
    <label for="inputPassword2" class="sr-only">PAPID</label>
    <input name="id" type="text" class="form-control" id="inputPassword2" value=<?php echo "$id" ?> disabled>
  </div>

  <div class="form-group mx-sm-3 mb-2 offset-md-3">
    <label for="inputPassword2" class="sr-only">Username</label>
    <input name="user" type="text" class="form-control" id="inputPassword2" value=<?php echo "$user" ?> disabled>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Validate</button>
</form>


</center>

<?php
if(isset($_GET['nonv'])){
  echo '<script>alert("The Code Is Wrong")</script>'; }
?>
    
</body>
</html>