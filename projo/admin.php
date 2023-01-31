<?php
session_start();
include("conection.php");
include("functions.php");

if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    //read from db

    $query = "SELECT * FROM  administrator where user_name = '$user_name' limit 1";
    $results = mysqli_query($con, $query);


    if ($results) {
        if ($results && mysqli_num_rows($results) > 0) {
            $user_data = mysqli_fetch_assoc($results);
            if ($user_data['password'] === $password) {
                $_SESSION['user_id'] = $user_data['user_id'];
                // while ($row = mysqli_fetch_assoc($results)) {
                //     echo '<h1>' . $row["index_no"] . ' </h1>';
                //     echo '<div> ' . $row["password"] . ' </div>';
                // }

                header("Location: admin/admin.dashboard.php");
                die;
            } else {
                echo "wrong username or password";
            }
        } else {
            echo 'No user found,please sign up';
            header("location: signup.php");
        }
    }
} 
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/bootstrap-4.4.1/dist/css/bootstrap.min.css">
    <!-- <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/popper.js"></script> -->
    <script src="assets/bootstrap-4.4.1/dist/js/bootstrap.min.js"></script>
    <script src="assets/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="css/skeleton.css">
    <!--<script src="index.js"></script> -->
    <title>HISEB admin portal</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item ac">
                        <a class="nav-link" href="logout.php"> logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <form method="POST" id="bookform">
            <div>
                <label for="username">username</label>
                <input type="text" name="user_name" class="u-full-width" autocomplete="off">
            </div>
            <div>
                <label for="password">PASSWORD</label>
                <input type="password" name="password" class="u-full-width">
            </div>

            <div>
                <button class="u-full-width" name="submit">login</button>
            </div>
        </form>
    </div>

    </div>
    </div>
</body>

</html>