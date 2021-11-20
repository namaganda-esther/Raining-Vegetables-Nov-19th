<?php
require('db.php');
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="./CSS/index.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<!-- <th><strong>S.No</strong></th> -->
<th><strong>Farm Location</strong></th>
<th><strong>Acres of Land</strong></th>
<th><strong>Crop</strong></th>
<th><strong>Input Cost</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from farm_records ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["FarmLocation"]; ?></td>
<td align="center"><?php echo $row["acresofland"]; ?></td>
<td align="center"><?php echo $row["Crop"]; ?></td>
<td align="center"><?php echo $row["InputCost"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>