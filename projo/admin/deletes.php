<?php
include 'includes/conection.php';

if(isset($_GET['deleteid'])){

    $id = $_GET['deleteid'];

    $query = "DELETE FROM schools_selected WHERE id = $id";
    $query_run = mysqli_query($con, $query);

if($query_run){
  
  header('Location: placement.php');
}
else{
    echo'<script>alert("Failed to delete"); </script>';   
}

}
