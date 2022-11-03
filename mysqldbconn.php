<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$server='ec2-54-82-205-3.compute-1.amazonaws.com';
$usr='dmnbxmdqdnxeah';
$pass='7db3e696aded357a7627f4d476c1ccc2a8a2b5866774ef6ca69c963a9f6beb2a';
$db = "d2d1f5co2r9tbn";


$conn = pg_connect("host=ec2-44-196-174-238.compute-1.amazonaws.com port=5432 dbname=dcd9sj1kb7lvcu user=
pijbamjmypjwmo password=
065c2cc8f8aad6e30eefcbb7e3e8af9226ac58459b16ed4845f1bdbd5017c30e");
if($conn){}else{
    echo "not ok";
   }
?>
