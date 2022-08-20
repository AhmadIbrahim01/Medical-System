<?php session_start(); ?>
<?php include 'incs/adnav.php'; ?>
<?php include 'incs/adsession.php'; ?>

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
    <title>Add New Admin</title>
</head>

<body>
    <br>
    <center>
        <div class="bordb">
            <h2>Add New Admin</h2>
        </div>
    </center>
    <br>

        <div class="bord">
            <form class="formus" method="post" action="actions/addnewadminaction.php">
            <div class="form-group">
                <label>Enter Full Name</label>
                <input type="text" name="fullname" class="form-control" placeholder="Type your full name">
            </div>
            
            <div class="form-group">
                <label>Enter Email Address</label>
                <input type="text" name="email" class="form-control" placeholder="Type your email address">
            </div>

            <div class="form-group">
                <label>Enter Phone Number</label>
                <input type="text" name="phone" class="form-control" placeholder="Type your phone number">
            </div>
            
            <div class="form-group">
                <label>Create Username</label>
                <input type="text" name="username" class="form-control" placeholder="Create username">
            </div>
            
            <div class="form-group">
                <label>Create Password</label>
                <input type="password" name="pass" class="form-control" placeholder="Create password">
            </div>

            <?php
        include 'incs/connection.php';
        $sql = "SELECT type FROM admintype";
        $result = mysqli_query($con,$sql);
        ?>

                <div class="form-group">
                    <label>Choose Type</label>
                    <select class="form-control" name="adtype">
                    <option>Select the admin type</option>
        <?php while($row = mysqli_fetch_array($result)):;?>
        <option><?php echo $row[0];?></option>
        <?php endwhile; ?>
                </select>
              </div>
            <br><br>
            <button type="submit" class="btn btn-outline-primary margins">Add Admin</button><br><br>
    </form>
    </div>

    <?php
        if(isset($_GET['ms'])){
            echo '<script>alert("Please Fill All The Information")</script>';
        }
        elseif(isset($_GET['su'])){
            echo '<script>alert("Admin Record Added")</script>';
        }
        ?>

</body>
</html>