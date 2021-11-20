<?php

require('db.php');
include("authentication.php");

if(mysqli_query($con, "Delete from Farmers where ID=4"))
{
echo "Record Deleted Successfully";
      "</br></br><a href='index.php'>Home</a>";
}
else
{
echo "Error!!";
}

//close the connection
mysqli_close($con);

?>