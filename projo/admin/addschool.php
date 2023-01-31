<?php
session_start();
include("includes/conection.php");
include("includes/functions.php");

if (isset ($_POST['submit'])) {
    $school_name = $_POST['school_name'];
    $category = $_POST['category'];
    $level = $_POST['level'];
    $location= $_POST['location'];

    //save to db

    $query = "INSERT INTO schools (school_name,category,level,location) values('$school_name','$category','$level','$location')";
    $results = mysqli_query($con, $query);
   header('location:admin.dashboard.php');
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-4.4.1/css/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../css/skeleton.css">
    <title>HISEPS ADMIN PANEL</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST" id="bookform">
            <div>
                <label for="username">school name</label>
                <input type="text" name="school_name" class="u-full-width" autocomplete="off">
            </div>
            <div>
                <label for="category">category</label>
                <input type="text" name="category" class="u-full-width" autocomplete="off">
            </div>
            <div>
                <label for="level">level</label>
                <input type="text" name="level" class="u-full-width" autocomplete="off">
            </div>
            <div>
                <label for="COUNTY">location</label>
                <input type="text" name="location" class="u-full-width" autocomplete="off">
            </div>

            <div>
                <button class="u-full-width" name="submit">submit</button>
            </div>
        </form>
    </div>
</body>

</html>