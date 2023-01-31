<?php
session_start();
include("conection.php");
include("functions.php");
if (isset($_POST['submit'])) {
    $index_no = $_POST['index_no'];
    $password = $_POST['password'];
    

    //read from db

    $query = "SELECT * FROM students where index_no ='$index_no' ";
    $results = mysqli_query($con, $query);
    
    if ($results) {
        if ($results && mysqli_num_rows($results) > 0) {
            $user_data = mysqli_fetch_assoc($results);
            if ($user_data['password'] === $password) {
                $_SESSION['user_id'] = $user_data['user_id'];
                while ($row = mysqli_fetch_assoc($results)) {
                    echo '<h1>' . $row["index_no"] . ' </h1>';
                    echo '<div> ' . $row["password"] . ' </div>';
               
                }
                $_SESSION['index_no']= $index_no;
                $_SESSION['marks']= $marks;
                $_SESSION['email']= $email;
                header("Location: placed.php");
                die;
            } else {
                echo "wrong username or password";
            }
        } else {
            // $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
            // $_SESSION['status'] = 'error';

            // echo (mysqli_error($con));

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
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/popper.js"></script>
    <script src="assets/bootstrap-4.4.1/dist/js/bootstrap.min.js"></script>
    <script src="assets/fontawesome/js/all.js"></script>
    <link rel="stylesheet" href="css/student-login.css">
    <script src="index.js"></script>
    <title>HISEB student portal</title>
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
                        <a class="nav-link" href="student login.php"> login</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <header><b>LOG IN</b></header>
    <aside>
        <h3><u>GUIDELINES ON HOW TO LOGINS</u> </h3>
        <p>
        <h5>KINDLY USE YOUR INDEX NUMBER AS YOUR USERNAME
            <br>
            <br>
            YOUR BIRTH CERTIFICATE NUMBER AS YOUR PASSWORD
        </h5>
        </p>
        <h3><u>WELCOME TO HISEPS</u> </h3>
        <p>After you have logged in you will be able to select the schools of your choice and submit them for approval
            and placement. Thank You</p>
    </aside>
    <div class="login-page">
        <div class="form">

            <form class="login-form" method="POST">
                <label for="index_no">index_no</label>
                <input type="text" placeholder="index number" name="index_no" required>
                <label for="birth">Password </label>
                <input type="password" placeholder="birthcert no." name="password" required>
               
                <button class="btn btn-primary" name="submit">LOGIN</button>
                <p class="message">not registered?<a href="signup.php">Register</a></p>
            </form>
        </div>
    </div>
    <!--- Cards -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card">

                    <p>
                    <h5>HISEPS</h5>HISEPS is a system that enable students select high school of their choice in
                    Kenya and also facilitate their placement to various schools according to their marks
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">

                    <p>
                    <h5>SOCIALS</h5>
                    <p>FACEBOOK</p>
                    <p>CELL:0712345678/
                        0798928733
                    </p>
                    <p>EMAIL: hiseps@gmail.com </p>
                </div>
            </div>
        </div>
    </div>

  </body>

</html>