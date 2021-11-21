<?php
require('db.php');
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="./CSS/index.css" />
</head>
<body>
<div class="form">
<h3>Welcome to your Dashboard <?php echo $_SESSION['username']; ?>!</h3>
<p><a href="index.php"><input type="submit" value="Home" name="home"></a><p>
<p><a href="insert.php"><input type="submit" value="Insert New data" name="insert"></a></p>
<p><a href="view.php"><input type="submit" value="View Data" name="view"></a><p>
<p><a href="logout.php"><input type="submit" value="LogOut" name="logout"><br/></a></p>
<p><a href="remove.php"><input type="submit" value="Delete Account" name="delete"> <br/></a></p>
</div>
</body>
</html>