<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "mysqldbconn.php";

$sql = "CREATE TABLE users (
name VARCHAR(50) NOT NULL,
display_name VARCHAR(50) NOT NULL,
email VARCHAR(50),
gender VARCHAR(50),
password VARCHAR(500),
cpassword VARCHAR(500)
)";

$result = pg_query($conn,$sql);
if($result){
  echo "Table users created ";}else{
  echo "table users not created";}

?>
