<?php

require 'mysqldbconn.php';

$sql = "CREATE TABLE usersregular (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
signup_date DATE,
profile_pic VARCHAR(255),
num_post INT,
num_likes INT,
user_closed VARCHAR(3),
friend_arrat TEXT
)";

$run = pg_query($conn,$sql);
if($run){
    echo 'ok';
}

?>