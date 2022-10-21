<?php 

require "mysqlidbconn.php";

$sql = "INSERT INTO users (name,display_name,gmail,gender,password,cpassword)
VALUES ('vignesh','vignesh','vignesheg10@gmail.com','male','123',' 123')";


$result = pg_query($conn,$sql);

if($result){
    echo "Inserted";
}else{
    echo "not inserted";
}

?>