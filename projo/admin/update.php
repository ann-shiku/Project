<?php
session_start();
include("includes/conection.php");
include("includes/functions.php");
$id=$_GET['updateid'];
$sql = "SELECT * FROM schools where sch_id=$id ";

$results = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($results);
 $id=$row['sch_id'];
 $school_name=$row['school_name'];
 $category=$row['category'];
 $level=$row['level'];
 $location=$row['location'];
if (isset ($_POST['submit'])) {
    $school_name = $_POST['school_name'];
    $category = $_POST['category'];
    $level = $_POST['level'];
    $location = $_POST['location'];
    //save to db

    $query = "UPDATE schools set sch_id='$id',school_name='$school_name' ,category='$category' ,level='$level' ,location='$location' where sch_id='$id' ";
    $results = mysqli_query($con, $query);
    if($results){
        header('location:admin.dashboard.php');
    }
  else{
      die(mysqli_error($con)) ;
  }
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
                <input type="text" name="school_name" class="u-full-width" autocomplete="off" value=<?php echo $school_name?>>
            </div>
            <div>
                <label for="password">category</label>
                <input type="text" name="category" class="u-full-width" autocomplete="off" value =<?php echo $category ?>>
            </div>
            <div>
                <label for="level">level</label>
                <input type="text" name="level" class="u-full-width" autocomplete="off" value=<?php echo $level ?>>
            </div>
            <div>
                <label for="location">location</label>
                <input type="text" name="location" class="u-full-width" autocomplete="off" value=<?php echo $location ?>>
            </div>
            <div>
                <button class="u-full-width" name="submit">submit</button>
            </div>
        </form>
    </div>
</body>

</html>