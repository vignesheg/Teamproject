<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "mysqldbconn.php";

$sql = "SELECT * FROM users";
$result = pg_query($conn,$sql);
//$row = pg_fetch_assoc($result);

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
    <table class="table">
        <tr class="info">
            <th>Name</th>
            <th>Display Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th colspan="2" style="text-align:center;">Operations</th>
        </tr>
        <?php 
            while($row = pg_fetch_assoc($result)){
                echo "<tr><td>" .$row["name"]. "</td>
                          <td>" .$row["display_name"]."</td>
                          <td>" .$row["email"]. "</td>
                          <td>" .$row["gender"]. "</td>
                          <td><a href='updatedata.php?email=".$row["email"]."'>update/edit</td>
                          <td><a href='deletedata.php?email=".$row["email"]."'>delete</td>
                          </tr>" ;
              }
        ?>      
    </table>
</body>

</html>