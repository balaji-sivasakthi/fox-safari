<?php

include('./Database/dbconfig.php');

if($connection)
{
  // echo "Database Connected";
}
else
{
    header("Location: Database/dbconfig.php");
}
?>