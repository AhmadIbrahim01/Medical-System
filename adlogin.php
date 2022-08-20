<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
	<link rel="stylesheet" href="css/adlogin.css">
</head>

<body>
<form method="post" action="actions/adloginac.php">
	<div class="form-box">
		<div class="header-text">Login To The System</div>
        <input type="text" name="user" placeholder="Type Your Username">
        <input type="password" name="pass" placeholder="Type Your Password">
        <?php
        if(isset($_GET['er'])){
        echo "<p class=\"red\">Invalid Username or Password</p>";
        echo "<br>";}
        ?>
        <button>Login</button>
	</div>
</form>
</body>
</html>