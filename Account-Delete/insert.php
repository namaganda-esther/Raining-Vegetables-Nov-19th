<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $FarmLocation =$_REQUEST['flocation'];
    $acresofland = $_REQUEST['land'];
    $Crop =$_REQUEST['crop'];
    $InputCost = $_REQUEST['cost'];
    $ins_query="insert into farm_records
    ('flocation','land','crop','cost')values
    ('$FarmLocation','$acresofland','$Crop','$InputCost')";
    mysqli_query($con,$ins_query);
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="./CSS/index.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="view.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="flocation" placeholder="Enter your Farm Location" required /></p>
<p><input type="text" name="land" placeholder="Enter the acres of Land" required /></p>
<p><input type="text" name="crop" placeholder="Enter Crop" required /></p>
<p><input type="text" name="cost" placeholder="Enter Input cost" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>