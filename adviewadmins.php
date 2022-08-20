<?php session_start(); ?>
<?php include 'incs/adnav.php'; ?>
<?php include 'incs/adsession.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/viewissue.css">
    <title>View Admins</title>
</head>

<body>
<br>
    <center>
        <div class="bordb">
            <h2>View Admins</h2>
        </div>
    </center>
    <br>
    
    <center>
    <table>
        <tr>
            <th>AdID</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Username</th>
            <th>Password</th>
            <th>Type</th>
        </tr>

    <?php
        include 'incs/connection.php';
        
        $sql = "SELECT * FROM admins";
        
        if($result = mysqli_query($con,$sql)){
            while($row = mysqli_fetch_assoc($result)){
                echo    "<tr>
                            <td>".$row['adminID']."</td>
                            <td>".$row['fullname']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['phone']."</td>
                            <td>".$row['username']."</td>
                            <td>Password</td>
                            <td>".$row['type']."</td>
                         </tr>";
            }
        }
    ?>
    </table>
    </center>

</body>
</html>