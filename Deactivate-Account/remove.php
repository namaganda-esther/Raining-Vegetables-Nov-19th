<?php

require('db.php');
include("authentication.php");

if(mysqli_query($con, "DELETE from farmers WHERE username = $username" ))
{
echo "Record Deleted Successfully";
      "</br></br><a href='login.php'>Home</a>";
}
else
{
echo "Error!!";
}

//close the connection
mysqli_close($con);

?>