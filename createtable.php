<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "mysqldbconn.php";

$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
display_name VARCHAR(50) NOT NULL,
email VARCHAR(50),
gender VARCHAR(50),
password VARCHAR(500),
cpassword VARCHAR(50),
)";

$result = pg_query($conn,$sql);
if($result){
  echo "Table users created ";}else{
  echo "table users not created";}

?>
