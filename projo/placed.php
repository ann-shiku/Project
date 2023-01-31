<?php
session_start();
include 'conection.php';
$index_no = $_SESSION['index_no'];
$email = $_SESSION['email'];
$marks = $_SESSION['marks'];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap-4.4.1/css/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <title>placement</title>
</head>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item ac">
                        <a class="nav-link" href="logout.php"> logout</a>
                    </li>

        </ul>
      </div>
    </div>
  </nav>

    <table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">index_no</th>
        <th scope="col">Email</th>
        <th scope="col">Marks</th>
        <th scope="col">National </th>
        <th scope="col">Extra_County</th>
        <th scope="col">County</th>
        <th scope="col">operations</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT id,index_no,marks,email,National,extra_county,county FROM schools_selected where index_no = '$index_no' limit 1 ";
   
      $results = mysqli_query($con, $sql);

      while ($row = mysqli_fetch_assoc($results)) {
        $id = $row['id'];
        $index_no = $row['index_no'];
        $Email = $row['email'];
        $marks = $row['marks'];
        $National = $row['National'];
        $extra_county = $row['extra_county'];
        $county = $row['county'];
        echo '<tr>
       <th scope="row">' . $id . '</th>
       <td>' . $index_no . '</td>
       <td>' . $Email . '</td>
       <td>' . $marks . '</td>
       <td>' . $National . '</td>
       <td>' . $extra_county . '</td>
       <td>' . $county . '</td>
       <td> 
       <button class="btn btn-primary "><a class="text-light "  href="editselection.php ">Edit</a></button>
     </tr>';
      }
      echo $marks;
      echo $index_no;
      ?>
      <!-- <button class="btn btn-primary "><a class="text-light "  href="editselection.php ">Edit</a></button> -->

    </tbody>
    
  </table>
  <footer>
    <div class="inner-footer">



    </div>
    <div class="outer-footer">
      Copyright &copy;hiseb coding. All Rights Reserved <i class="fas fa-copyright    "></i>
    </div>
  </footer>
<body>
    
</body>
</html>