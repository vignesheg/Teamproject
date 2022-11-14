<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$sql = 'SELECT * FROM users';
$run = pg_query($conn,$sql);
$row = pg_fetch_assoc($run);


?>
    <table class="table table-border">
        <tr>
            <th>Name</th>
            <th>Display Name</th>
            <th>Email</th>
            <th>Gender</th>
           <th >status</th>
            <th colspan="2" >Operations</th>
        </tr>
        <?php 
            while($row = pg_fetch_assoc($run)){
                echo "<tr><td>".$row['name']."</td>
                          <td> ".$row['name']."</td>
                          <td>".$row['name']."</td>
                          <td>".$row['name']."</td>      
                          <td>".$row['name']."</td>" ?>
                          <td><?php if($row['status'] == "0"){
                            echo '<button>Inactive</button>';
                          }"</td>                 
                          <td><a style = 'margin-right:-2rem;'  class='btn btn-white'href='updatedata.php?email=".$row["email"]."'><i class='fa-regular fa-pen-to-square'></i></td>
                          <td><a style = 'margin-left:-10rem;' class='btn btn-white' href='deletedata.php?email=".$row["email"]."'><i class='text-danger fa-regular fa-trash-can'></i></td>
                          </tr>" ;
            }
        ?>  
           
    </table>
    <a href = '#'>update</a>
