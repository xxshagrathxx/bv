<?php
    require_once "connection.php";
    include "inc/header.php";

    //read the json file contents 
    $jsondata = file_get_contents('rightData.json');
    //convert json object to php associative array
    $data = json_decode($jsondata, true);

    foreach($data as $row) {
        //get the details
        $id = $row['id'];
        $title = $row['title'];
        $description = $row['description'];

        //insert into mysql table
        $sql = "UPDATE `offers`
                SET `title` = '$title', `description` = '$description'
                WHERE `id` = $id";

        if(!mysqli_query($conn, $sql))
        {
            die('Error : ' . mysql_error());
        }
    }
    echo "Updated To the Right Data Successfully";
    ?>
    <br>
    <a href="index.php" class="btn btn-info"> Back To The Main Page </a>
