<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require "mysqldbconn.php";

if(isset($_POST['login'])){
    $username = $_POST['gmail'];
    $password = $_POST['password']; 
    

$sql = "SELECT * FROM users WHERE email = '$username'";
$result = pg_query($conn,$sql);
$num = pg_num_rows($result);

if($run === 1){
    header('userslist.php');
}}?>

