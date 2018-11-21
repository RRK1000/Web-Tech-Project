<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "wt_db";

    // Create connection
    $link = mysqli_connect($servername, $username, $password, $db);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $name = $_POST["name"];
    // Print host information
    // echo "Connect Successfully. Host info: " . mysqli_get_host_info($link). "<br/>";
    $sql = "UPDATE LEADERBOARD SET score=score+5 WHERE first_name='$name'";
    if (mysqli_query($link, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $link->error;
    }
    
    mysqli_close($link);
    ?>