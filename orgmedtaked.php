<?php session_start(); ?>
<?php include 'incs/nav2.php'; ?>
<?php include 'incs/orgSession.php'; ?>
<?php $user = $_GET['user']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/viewissue.css">
    <title>Medicines Taked</title>
</head>

<body>
<br>
    <center>
        <div class="bordb">
            <h2>Medicines Taked</h2>
        </div>
    </center>
    <br>
    
    <center>
    <table>
        <tr>
            <th>PAPID</th>
            <th>Organization Name</th>
            <th>Organization Phone</th>
            <th>Doctor Name</th>
            <th>Write Date</th>
            <th>Take Date</th>
            <th>Status</th>
            <th>Info</th>
        </tr>

        <?php
        include 'incs/connection.php';
        $sql = "SELECT * FROM medicinepaper WHERE patuser='$user' AND status='taked' ORDER BY PAPID DESC";
        
        if($result = mysqli_query($con,$sql)){
            while($row = mysqli_fetch_assoc($result)){
                echo    "<tr>
                            <td>".$row['PAPID']."</td>
                            <td>".$row['organizaionName']."</td>
                            <td>".$row['organizaionPhone']."</td>
                            <td>".$row['doctorName']."</td>
                            <td>".$row['writeDate']."</td>
                            <td>".$row['takedDate']."</td>
                            <td>".$row['status']."</td>
                            <td><a href=orgmedtakedinfo.php?id=".$row['PAPID']."&user=".$user.">info</a></td>
                         </tr>";
            }
        }
    ?>
    </table>

    <br><br><br><br>
    <div>
    <?php echo"<a href=orgPatientFile.php?user=$user><button type='submit' class='btn btn-outline-primary margins'>Back</button></a>"; ?>
    </div><br><br>

    </center>

</body>
</html>