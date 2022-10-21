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

<head></head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Display Name</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
        <?php 
            while($row = pg_fetch_assoc($result)){
                echo "<tr><td>" .$row["name"]. "</td>
                          <td>" .$row["display_name"]."</td>
                          <td>" .$row["email"]. "</td>
                          <td>" .$row["gender"]. "</td>
                          <td><a href='updatedata.php?gmail=".$row["gmail"]."'>update/edit</td>
                          <td><a href='deletedata.php?gmail=".$row["gmail"]."'>delete</td>
                          </tr>" ;
              }
                   echo "<tr><td><a href = 'logout.php'>logout</a></td></tr>";
              echo "</table>";
        ?>      
    </table>
</body>

</html>