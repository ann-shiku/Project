<?php
session_start();
error_reporting(0);

include 'conection.php';
$marks=$_SESSION['marks'];
$index_no = $_SESSION['index_no'];
$sql = "SELECT * FROM schools_selected where index_no ='$index_no'";

$results = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($results)) {

    $index_no = $row['index_no'];
    $marks = $row['marks'];
    $email = $row['email'];
    $National = $row['National'];
    $extra_county = $row['extra_county'];
    $county = $row['county'];
}
// if(isset($national) && isset($extra_county) && isset($county)){
    $selected1 = $_POST["national"];
    $selected2 = $_POST['extra_county'];
    $selected3 = $_POST['county'];
    if(isset($_POST['submit'])){
        $query="UPDATE schools_selected SET national= '$selected1', extra_county ='$selected2', county='$selected3' where index_no = '$index_no'";
        $results =mysqli_query($con,$query);
        if($results){
            echo "updated successfully";
        }else{
            echo (mysqli_error($con));
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
                        <a class="nav-link" href="logout.php"> logout</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <aside>
        <h3><u>GUIDELINES ON HOW TO SELECT YOUR SCHOOL</u> </h3>
        <p>
        <h5>KINDLY SELECT SCHOOLS FROM THE CATEGORY OPTIONS AVAILABLE</h5>
        </p>
        <h3><u>WELCOME TO HISEPS</u> </h3>
        <p>After you have logged in you will be able to select the schools of your choice and submit them for approval and placement. Thank You</p>
    </aside>
    <h3>SELECT SCHOOLS THAT YOU WISH TO JOIN</h3>
    <form method="POST">
        
        <?php
        // echo $marks;
        // echo $index_no;
        if ($marks >= 400) { ?>
            <div style=" margin: auto 100px;"><label for="category">NATIONAL</label></div>
            <!--form selection-->

            <select style=" margin: auto 100px;" class="form-select" size="5" aria-label="size 8 select example" name="national" multiple>
                <?php
                $sql = "SELECT * FROM schools  WHERE level='national school'";
                $results = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($results)) {
                    $School_name = $row['school_name'];

                ?>

                    <option style="width: 500px;">
                    <?php
                    echo $School_name;
                }
                    ?>
            </select>
            <div style=" margin: auto 100px;"><label for="category">EXTRA COUNTY</label></div>
            <select style=" margin: auto 100px;" class="form-select" size="5" aria-label="size 8 select example" name="extra_county">
                <?php
                $sql = "SELECT * FROM schools  WHERE level='Extra county '";

                // $sql = 'SELECT school_name FROM schools ';

                $results = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($results)) {
                    $School_name = $row['school_name'];
                ?>
                    <option style="width: 500px;"><?php
                                                    echo $School_name;
                                                }
                                                    ?>

            </select>
        <?php
        } else if ($marks >= 350 && $_marks< 400) { ?>
            <div style=" margin: auto 100px;"><label for="category">EXTRA COUNTY</label></div>
            <select style=" margin: auto 100px;" class="form-select" size="5" aria-label="size 8 select example" name="extra_county">
                <?php
                $sql = "SELECT * FROM schools  WHERE level='Extra county '";

                // $sql = 'SELECT school_name FROM schools ';

                $results = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($results)) {
                    $School_name = $row['school_name'];
                ?>
                    <option style="width: 500px;"><?php
                                                    echo $School_name;
                                                }
                                                    ?>

            </select>
            <div style=" margin: auto 100px;"><label for="category"> COUNTY</label></div>
            <select style=" margin: auto 100px;" class="form-select" size="5" aria-label="size 8 select example" name="county">
                <?php
                $sql = "SELECT * FROM schools  WHERE level='County school'";
                $results = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($results)) {
                    $School_name = $row['school_name'];
                ?>
                    <option style="width: 500px;"><?php
                                                    echo $School_name;
                                                }
                                                    ?>

            </select>
        <?php
        } else { ?>
            <div style=" margin: auto 100px;"><label for="category"> COUNTY</label></div>
            <select style=" margin: auto 100px;" class="form-select" size="5" aria-label="size 8 select example" name="county">
                <?php
                $sql = "SELECT * FROM schools  WHERE level='County school'";
                $results = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($results)) {
                    $School_name = $row['school_name'];
                ?>
                    <option style="width: 500px;"><?php
                                                    echo $School_name;
                                                }
                                                    ?>

            </select>
        <?php
        }
        ?>


        <button class="btn btn-primary" style=" width: 900px;
  box-sizing: border-box; margin: 20px 30px" name="submit">SUBMIT SELECTION</button>
    </form>


    <div>

        <br>
        <br>

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
    </div>
    <!-- Footer-->
    <footer class="footer bg-light">
        <div class="container">
            <p class="text-muted small mb-4 mb-lg-0">&copy; HISEPS@ 2022. All Rights Reserved.</p>
        </div>
    </footer>

</body>

</html>