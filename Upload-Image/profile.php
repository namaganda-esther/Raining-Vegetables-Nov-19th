<html>
<head>
<title>Upload Picture</title>
<link rel="stylesheet" href="./profile.css">
</head>
<body>

<?php
if(isset($_POST['Submit1']))
{ 
$filepath = "images/" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "<img src=".$filepath." height=200 width=300 />";
} 
else 
{
echo "Error !!";
}
} 

?>
<?php
if(isset($_POST['delete']))
{ 
    foreach($_POST['delete'] as $file)
	{	
		unlink($path . "/" . $file) or die("Failed to <strong class='highlight'>delete</strong> file");
	}
	header("location: " . $_SERVER['REQUEST_URI']);
} 
?>

<div class="container">
    <form action="profile.php" enctype="multipart/form-data" method="post">
    Select image :
    <input type="file" name="file"><br/>
    <div class="button">
       <input type="submit" value="Upload" name="Submit1"> <br/>
       <input type="submit" value="Edit" name="edit"> <br/> 
       <input type="submit" value="Delete" name="delete"> <br/>
    </div>
    </form>
</div>

</body>
</html>