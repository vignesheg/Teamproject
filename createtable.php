<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "mysqldbconn.php";


$sql = "ALTER TABLE users
DROP COLUMN status;";

$sql1 = "DELETE FROM users WHERE email = 'vignesheg10@gmail.com'";

$result = pg_query($conn,$sql1);
if($result){
  echo "Table users created ";}else{
  echo "table users not created";}

?>
