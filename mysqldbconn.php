<?php

$server='localhost';
$usr='root';
$pass='';
$db = "studentsmark";


$conn = mysqli_connect($server,$usr,$pass,$db);
if(!$conn){
    die('connection failed:'.mysqli_connect_error());
}
?>