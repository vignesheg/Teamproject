<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "mysqldbconn.php";


$sql = "ALTER TABLE users
DROP COLUMN status;";

$sql1 = "ALTER TABLE users
ADD status varchar(200);";

$result = pg_query($conn,$sql1);
if($result){
  echo "Table users created ";}else{
  echo "table users not created";}

?>
