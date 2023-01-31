<?php
session_start();
include("conection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        //read from db

        $query = "SELECT * FROM administrator where user_name = '$user_name' limit 1";
        $results = mysqli_query($con, $query);

     }
        if ($results) {
            if ($results && mysqli_num_rows($results) > 0) {
                $user_data = mysqli_fetch_assoc($results);
                if ($user_data['password'] === $password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    while($row = mysqli_fetch_assoc($results)){
                        echo '<h1>'.$row["user_name"].' </h1>';
                        echo '<div> '.$row["password"].' </div>';
                    }

                    header("Location: index.php");
                    die;
                }else{
                    echo "wrong username or password,please sign up";
                    echo '<a href="signup.php">signup</a>';
                    
                    
                }
            }else{
                echo 'No user found,please sign up';
                header("location: signup.php");
            }
        }
        
    }
     else {
        echo "oops! wrong username or password";
    }
    //         while($row = mysqli_fetch_assoc($results)){

//             echo "Username: " .$row['user_name'];
//             echo "Password: " .$row['password'];
    
//                 if($row['password'] === $password){
//                     echo 'password matched';
//                     header("Location: index.php");
    
//                 }else{
//                     echo 'wrong persword';
//                     }
//         }  
//   }else{
//       echo 'empty fields';
//   }
?>

