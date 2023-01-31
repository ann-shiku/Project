<?php
session_start();
if(isset($_SESSION['user_id'])){
    unset($_SESSION['user_id']);
}
header("location: admin.dashboard.php");
die;

?>