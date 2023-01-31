<?php
include 'includes/conection.php';
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap-4.4.1/css/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="assets/fontawesome/css/all.css">
  <title>Admin Dashboard</title>
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
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item ac">
                        <a class="nav-link" href="logout.php"> logout</a>
                    </li>

        </ul>
      </div>
    </div>
  </nav>
  <button class="btn btn-primary my-5  "><a href="addschool.php" class="text-light">Add school</a></button>
  <button class="btn btn-primary "><a class="text-light "  href="placement.php">Place students</a></button>
  <table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">school_name</th>
        <th scope="col">category</th>
        <th scope="col">level</th>
        <th scope="col">location</th>
        <th scope="col">operations</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = 'SELECT * FROM schools  ';

      $results = mysqli_query($con, $sql);

      while ($row = mysqli_fetch_assoc($results)) {
        $id = $row['sch_id'];
        $school_name = $row['school_name'];
        $category = $row['category'];
        $level = $row['level'];
        $location = $row['location'];
        echo '<tr>
       <th scope="row">' . $id . '</th>
       <td>' . $school_name . '</td>
       <td>' . $category . '</td>
       <td>' . $level . '</td>
       <td>' . $location . '</td>
       <td> 
       <button class="btn btn-danger "><a  class="text-light " href="delete.php ?deleteid=' . $id . '">Delete school</a></button>
       <button class="btn btn-primary "><a  class="text-light " href="update.php ?updateid=' . $id . '">update school</a></button></td>
     </tr>';
      }

      ?>

    </tbody>
  </table>
  <footer>
    <div class="inner-footer">



    </div>
    <div class="outer-footer">
      Copyright &copy;hiseb coding. All Rights Reserved <i class="fas fa-copyright    "></i>
    </div>
  </footer>
</body>

</html>