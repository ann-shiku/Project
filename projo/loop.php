<?php
if(isset($_POST['submit'])){
    // $i=$_GET['num'];
    // if(200<$i && $i<400){
    //     // for($i=0;$i<5;$i++)
    //     echo $i;
    // }else{
    //     echo"invalid";
    // }
    echo "<script>alert('hallo')</script>";
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <!-- <input type="text" name="num"> -->
    <input type="submit" value="submit" name="submit">
    </form>
   
</body>
</html>