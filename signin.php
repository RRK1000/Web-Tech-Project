<?php
$uname = $_POST['username'];
// $uname = "aniketnk";

if (empty($uname)) {
    header("HTTP/1.1 403 Bad Request");
    echo "The username is required!";
} else {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "wt_db";
    $conn = new mysqli($servername, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        header("HTTP/1.1 500 Server Error");
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // Print host information
    // echo "Connect Successfully. Host info: " . mysqli_get_host_info($conn). "<br/>";

    $sql = "SELECT * from LEADERBOARD 
            WHERE `first_name` = '$uname'
            ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("HTTP/1.1 200 OK");
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["score"] . "\n";
        }
        echo '<script type="text/javascript">window.location = "gameSelection.html";</script>';

    } else {
        header("HTTP/1.1 401 Unauthorized");
        // echo "0 results";
        echo '<script type="text/javascript">alert("Invalid Sign In"); window.location = "index.html";</script>';

    }
} 
mysqli_close($con);

?> 