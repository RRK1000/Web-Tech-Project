<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<head>
    <title>TICTACTOE & HANGMAN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
</head>

<body background="bg2.png">
    <div class="jumbotron text-center">
        <div class="display-3 animated fadeInLeft">Tic-tac-toe & Hangman</div>
    </div>
    <div class="container center w-50 animated fadeInUp">
        <div class="jumbotron">
            <div class="row">
                <div class="display-4 mb-4 col-6 offset-4">SIGN UP</div>
            </div>
            <form id="login" action="authenticate.php" method="POST">
                <label for="username">Name</label>
                <input type="text" class="form-control form-control-lg" id="username" placeholder="Enter your Name" name="username"
                    required>
                <div class="form-inline">
                    <button class="btn btn-info btn-lg col-4 btn-block w-25 mt-4 ml-auto mr-2" value="Confirm" id="Save" data-theme="a"
                        onclick="save_data()">Save</button>
                    <a href="index.html" class="btn btn-dark btn-lg w-25 btn-block mr-auto mt-4" id="index">Home</a>
                </div>
            </form>

            <script type="text/javascript">
                function save_data() {
                    var input = document.getElementById("username");
                    localStorage.setItem("username", input.value);
                }
            </script>
        </div>
    </div>
</body>

</html>