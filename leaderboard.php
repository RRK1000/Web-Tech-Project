</html>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Leaderboard</title>
    <link rel="stylesheet" type="text/css" href="css/tic-tac-toe.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <style>
        table {
            width: 100%;
            border: 1px solid black;
        }
        table th {
            text-align:center;
            background-color: #ff6666;
            color:black;
            padding: 15px;
            border: 1px solid black;
            font-size:1.7em;
        }
        table td {
            text-align: left;
            background-color:white;
            color:black;
            padding: 15px;
            border: 1px solid black;
            font-size:0.9em;

        }

    </style>

</head>

<body background="bg2.png">
    <div class="jumbotron">
        <div class="row">
            <div class="col-7 offset-4 display-3 animated fadeInLeft">LEADERBOARD</div>
        </div>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="jumbotron animated slideInUp">
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
             
            // Print host information
            // echo "Connect Successfully. Host info: " . mysqli_get_host_info($link). "<br/>";

            $result = mysqli_query($link,"SELECT * FROM LEADERBOARD ORDER BY SCORE DESC");

            echo "<table>
            <tr>
            <th>Name</th>
            <th>Score</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['score'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";

            mysqli_close($link);
        ?>
            <a href="index.html" class="btn btn-dark btn-lg w-25 btn-block mx-auto mt-4" id="index">Home</a>

            </div>
        </div>
    </div>
</body>

</html>