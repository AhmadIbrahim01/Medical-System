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
    <title>Medical Reports</title>
</head>

<body>
<br>
    <center>
        <div class="bordb">
            <h2>Medical Reports</h2>
        </div>
    </center>
    <br>
    
    <center>
    <table>
        <tr>
            <th>RID</th>
            <th>Organization Name</th>
            <th>Organization Phone</th>
            <th>Doctor Name</th>
            <th>Patient Username</th>
            <th>Write Date</th>
            <th>Report Info</th>
        </tr>

        <?php
        include 'incs/connection.php';
        $sql = "SELECT * FROM reports WHERE patuser='$user' ORDER BY RID DESC";
        
        if($result = mysqli_query($con,$sql)){
            while($row = mysqli_fetch_assoc($result)){
                echo    "<tr>
                            <td>".$row['RID']."</td>
                            <td>".$row['orgname']."</td>
                            <td>".$row['orgphone']."</td>
                            <td>".$row['doctorname']."</td>
                            <td>".$user."</td>
                            <td>".$row['date']."</td>
                            <td><a href=orgreportinfo.php?id=".$row['RID']."&user=".$user.">report</a></td>
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