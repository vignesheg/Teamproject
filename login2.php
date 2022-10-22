<?php

require "mysqldbconn.php";

if(isset($_POST['login'])){
    $username = $_POST['gmail'];
    $password = $_POST['password']; 
    

$sql = "SELECT * FROM users WHERE email = '$username'";
$result = pg_query($conn,$sql);
$num = pg_num_rows($result);

if($run === 1){
    header('userslist.php');
}?>

