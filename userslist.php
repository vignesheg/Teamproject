<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ob_start();
 session_start();
 require "mysqldbconn.php";

 $username = $_SESSION["username"];
 //var_dump($username);
 if($username == true){}
  else{
    header('location:/table-03/table-03/login.php');
   }
  
 

 $sql= "SELECT * FROM users";
 $result = mysqli_query($conn , $sql) or die("error $sql");

 ?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Table 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Users List</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>Username</th>
					        <th>Display Name</th>
							<th>Email</th>
					        <th>Gender</th>
					        <th colspan="2" >Operations</th>
					      </tr>
					    </thead>
					    <tbody>
							<?php  while($row = mysqli_fetch_assoc($result)){
   echo "<tr><td>" .$row["username"]. "</td>
             <td>" .$row["display_name"]."</td>
             <td>" .$row["gmail"]. "</td>
             <td>" .$row["gender"]. "</td>
             <td><a class='btn btn-primary' href='updatedata.php?gmail=".$row["gmail"]."'>Update/Edit</td>
             <td><a class='btn btn-danger' href='deletedata.php?gmail=".$row["gmail"]."'>Delete</td>
             </tr>" ;}?>
					      
					      
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
