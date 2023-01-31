<?php
session_start();
include("conection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $index_no = $_POST['index_no'];
    $password = $_POST['password'];
    $marks = $_POST['marks'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    if (!empty($index_no) && !empty($password) && !empty($marks) && !empty($email) && !empty($gender)) {
        // for($index_no = 2000; $index_no <= 4000;$index_no++ )
        if ($marks < 500 && 2000<$index_no && $index_no<4000) {
            
            //save to db
            $user_id = random_num(100);
        $query = "insert into students (user_id,index_no,password,marks,email,gender) values('$user_id','$index_no', '$password', '$marks', '$email','$gender')";
        mysqli_query($con, $query);
        $_SESSION['index_no']= $index_no;
        $_SESSION['marks']= $marks;
        $_SESSION['email']= $email;
        header("location: selection.php");
        die; 
         }
         else{
            echo 'invalid marks or index';
         }    
          }
           else {
             die(mysqli_error($con));
          }
          
    }
  
 ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap-4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/student-login.css">
    <title>Student SignUp</title>
</head>
<body>
<div class="login-page">
        <div class="form">
<h1>CREATE ACCOUNT</h1>
            <form class="login-form"  method="POST">
                <label for="index_no">index_no</label>
                <input type="text" placeholder="index number" name="index_no" required>
                <label for="birth">Password </label>
                <input type="password" placeholder="birthcert no." name="password" required>
                <label for="index">marks </label>
                <input type="text" placeholder="kcpe marks" name="marks" required>
                <label for="index">email </label>
                <input type="email" placeholder="example:xx@gmail.com" name="email" required>
                <div>
                <input type="radio" placeholder="gender" name="gender" value="male" id="male" checked>
                <label for="male">Male</label>
                </div>
                <div>
                <input type="radio" placeholder="gender" name="gender" value="female"  id="female">
                <label for="female">female</label>
                </div>
                
                <button class="btn btn-primary" name="submit">SignUp</button>
                <p class="message">Already Have An Account?<a href="student login.php">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>