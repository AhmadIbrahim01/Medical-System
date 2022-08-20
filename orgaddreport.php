<?php session_start(); ?>
<?php include 'incs/nav2.php'; ?>
<?php include 'incs/orgSession.php'; ?>
<?php $userr = $_SESSION['suser']; ?>
<?php $puserrr = $_GET['user']; ?>

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
    <title>Create Medical Report</title>
</head>

<body>
    <br>
    <center>
        <div class="bordb">
            <h2>Create Medical Report</h2>
        </div>
    </center>
    <br>

        <div class="bord">
           <?php echo "<form class=formus method=post action=actions/orgaddreportac.php?user=$userr&puser=$puserrr>" ?>

            <div class="form-group">
                <label>Doctor Name</label>
                <input type="text" name="docnamee" class="form-control" placeholder="Enter your name (doctor)" required>
            </div>
            
            <div class="form-group">
                <label>Write Report</label>
                <textarea type="text" name="rep" class="form-control" placeholder="Write medical report" required rows="8"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-outline-primary margins">Create Report</button>
            <br><br>
    </form>
    </div>
</body>
</html>