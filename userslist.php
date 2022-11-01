<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "mysqldbconn.php";

$sql = "SELECT * FROM users";
$result = pg_query($conn,$sql);

$row1 = pg_fetch_assoc($result);
 $finder = $row1['status'];
 echo $finder;
 if($finder = "notactivated"){
    $button ='<button class="btn btn-success">Activate</button>';
 }else{
    echo 'no';
 }


?>

<html>

<head>

<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Display Name</th>
            <th>Email</th>
            <th>Gender</th>
           <th>status</th>
           <th>Actions</th>
            <th colspan="3" style="text-align:center;">Operations</th>
        </tr>
        <?php 
            while($row = pg_fetch_assoc($result)){
                echo "<tr><td>" .$row["name"]. "</td>
                          <td>" .$row["display_name"]."</td>
                          <td>" .$row["email"]. "</td>
                          <td>" .$row["gender"]. "</td>
                          <td>".$row['status']."</td>
                          <td>" .$button. "</td>                          
                          <td><a class='btn btn-primary' href='updatedata.php?email=".$row["email"]."'>Update/Edit</td>
                          <td><a class='btn btn-danger' href='deletedata.php?email=".$row["email"]."'>Delete</td>
                          </tr>" ;
              }
        ?>      
    </table>
</body>

</html>