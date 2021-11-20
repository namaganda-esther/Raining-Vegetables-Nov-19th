<?php
require('db.php');
require('authentication.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM Farmers WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: login.php"); 
?>