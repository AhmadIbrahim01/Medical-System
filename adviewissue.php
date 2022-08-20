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
    <title>View Issue</title>
</head>

<body>
<br>
    <center>
        <div class="bordb">
            <h2>View Issues</h2>
        </div>
    </center>
    <br>
    
    <center>
    <table>
        <tr>
            <th>ISID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Info</th>
        </tr>

    <?php
        include 'incs/connection.php';
        
        $sql = "SELECT * FROM contact ORDER BY id DESC";
        
        if($result = mysqli_query($con,$sql)){
            while($row = mysqli_fetch_assoc($result)){
                echo    "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td><a href=adissueinfo.php?id=".$row['id'].">Info</a></td>
                         </tr>";
            }
        }
    ?>
    </table>
    </center>

</body>
</html>