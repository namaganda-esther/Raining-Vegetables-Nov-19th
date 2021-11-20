<?php
require('db.php');
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="./CSS/index.css" />
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark justify-content-left">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Raining Vegetables</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <!-- <a class="nav-link" href="delete.php?id=<?php echo $row["id"]; ?>">Delete Account</a> -->
      <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>

  <?php
$count=1;
$sel_query="Select id from Farmers ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<!-- <a href="edit.php?id=<?php echo $row["id"]; ?>"></a> -->
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
<?php $count++; } 
?>
</nav>
<br>

<div class="container-fluid">
  <h3>Welcome</h3>
</div>

</body>
</html>