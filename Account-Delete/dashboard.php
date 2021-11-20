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
<p>Welcome to your Dashboard <?php echo $_SESSION['username']; ?>!</p>
<p><a href="index.php">Home</a><p>
<p><a href="insert.php">Insert New Record</a></p>
<p><a href="view.php">View Records</a><p>
<p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>