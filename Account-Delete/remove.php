<?php

require('db.php');
include("authentication.php");

if(mysqli_query($con, "DELETE from farmers WHERE id=8"))
{
echo "Record Deleted Successfully";
header("Location: login.php");
      "</br></br><a href='login.php'>Home</a>";
}
else
{
echo "Error!!";
}

//close the connection
mysqli_close($con);

?>