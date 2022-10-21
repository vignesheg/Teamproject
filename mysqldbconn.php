<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$server='ec2-54-82-205-3.compute-1.amazonaws.com';
$usr='dmnbxmdqdnxeah';
$pass='7db3e696aded357a7627f4d476c1ccc2a8a2b5866774ef6ca69c963a9f6beb2a';
$db = "d2d1f5co2r9tbn";


$conn = pg_connect($server,$usr,$pass,$db);
if($conn){
    die('connection failed:'.mysqli_connect_error());
}
?>