<?php
$uname = $_POST['username'];
// $score = $_POST['score'];
// $uname = "anikeftnk";
// $score = "2";

if (!empty($uname)) { 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "wt_db";
    $link = mysqli_connect($servername, $username, $password, $db);
 
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    // Print host information
    // echo "Connect Successfully. Host info: " . mysqli_get_host_info($link). "<br/>";

    $sql = "INSERT INTO LEADERBOARD(`first_name`,`score`)
            VALUES('$uname', 0);";
    if(mysqli_query($link, $sql)){
        header("HTTP/1.1 200 OK");
        // echo "Data added successfully.";
        echo '<script type="text/javascript"> window.location = "gameSelection.html" </script>';
    } else{
        header("HTTP/1.1 409 Conflict");        
        // echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        echo '<script type="text/javascript"> alert("User Already Exists"); window.location = "index.html" </script>';

    }
}
else {
    header("HTTP/1.1 403 Bad Request");
}
mysqli_close($con);

?> 