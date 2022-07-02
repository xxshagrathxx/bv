<?php
    require_once "connection.php";
    include "inc/header.php";

    //Empty Offers Table
    $sql = "TRUNCATE TABLE `offers`";

    if(!mysqli_query($conn, $sql))
    {
        die('Error : ' . mysql_error());
    }

    echo "Data Removed Successfully";
?>
<br>
<a href="index.php" class="btn btn-info"> Back To The Main Page </a>