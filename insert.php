<?php
    require_once "connection.php";
    include "inc/header.php";

    //read the json file contents 
    $jsondata = file_get_contents('corruptedData.json');
    //convert json object to php associative array
    $data = json_decode($jsondata, true);

    foreach($data as $row) {
        //get the details
        $title = $row['title'];
        $description = $row['description'];

        //insert into mysql table
        $sql = "INSERT INTO `offers`(`title`, `description`)
                VALUES('$title', '$description')";

        if(!mysqli_query($conn, $sql))
        {
            die('Error : ' . mysql_error());
        }
    }
    echo "Corrupted Data inserted Successfully";
    ?>
    <br>
    <a href="index.php" class="btn btn-info"> Back To The Main Page </a>