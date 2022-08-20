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
    <title>User Center</title>
</head>

<body>
<br>
    <center>
        <div class="bordb">
            <h2>User Center</h2>
        </div>
    </center>
    <br>
    
    <center>
    <table>
        <tr>
            <th>userID</th>
            <th>Organization Name</th>
            <th>Organization Email</th>
            <th>Organization Phone</th>
            <th>Organization District</th>
            <th>Status</th>
            <th>Registration Date</th>
            <th>Info</th>
        </tr>

    <?php
        include 'incs/connection.php';
        
        $sql = "SELECT * FROM userinfo WHERE status='active' or status='disabled' ORDER BY userID DESC";
        
        if($result = mysqli_query($con,$sql)){
            while($row = mysqli_fetch_assoc($result)){
                echo    "<tr>
                            <td>".$row['userID']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['phonenumber']."</td>
                            <td>".$row['district']."</td>
                            <td>".$row['status']."</td>
                            <td>".$row['registration_date']."</td>
                            <td><a href=userdetails.php?id=".$row['userID'].">Info</a></td>
                         </tr>";
            }
        }
    ?>
    </table>
    </center>

    <?php
        if(isset($_GET['en'])){
            echo '<script>alert("Account Enabled")</script>';}

        if(isset($_GET['di'])){
            echo '<script>alert("Account Disabled")</script>';}

        if(isset($_GET['no'])){
            echo '<script>alert("Account is already enabled")</script>';}

        if(isset($_GET['ns'])){
            echo '<script>alert("Account is already disabled")</script>';}
    ?>

</body>
</html>