<?php
session_start();
include '../includes/conection.php'; 
$id = $_GET['placeid'];
$sql = "SELECT * from schools_selected where id= $id ";
$results = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($results);
$index_no = $row['index_no'];
$email = $row['email'];
						
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">HISEP ADMIN PANEL</a>
			
	

		</div>
		<a class="btn btn-primary" href="../placement.php" role="button"> <i class="fas fa-backward    "></i>Back </a>

	</nav>
	<div class="col-md-3"></div>

	<div class="col-md-6 well">
		<h3 class="text-primary">Send Mail Notification.</h3>

		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form method="POST" action="send_email.php">
				<div class="form-group">
					<label>Email:</label>
					<input type="email" class="form-control" name="email" required="required" value=<?php echo $email
					?>>
				</div>
				<div class="form-group">
					<label>Subject</label>
					<input type="text" class="form-control" name="subject" required="required"/>
				</div>
				<div class="form-group">
					<label>Message</label>
					<textarea name="message"  cols="30" rows="5"> index <?php 

				echo $index_no ?> ,you have been successfully placed to join .. </textarea>
					
				</div>
				<center><button name="send" class="btn btn-primary"><span class="glyphicon glyphicon-envelope"></span> Send</button></center>
			</form>

			<br />
			<a class="btn btn-primary" href="../admin.dashboard.php" role="button"> <i class="fas fa-backward    "></i> Back Home</a>

			<?php
				if(ISSET($_SESSION['status'])){
					if($_SESSION['status'] == "ok"){
			?>
						<div class="alert alert-info"><?php echo $_SESSION['result']?></div>
			<?php
					}else{
			?>
						<div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
			<?php
					}
					
					unset($_SESSION['result']);
					unset($_SESSION['status']);
				}
			?>
		</div>
	</div>
</body>
</html>