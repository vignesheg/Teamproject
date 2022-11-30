<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require 'mysqldbconn.php';

//Declaring variables to prevent error
$name = '';
$email = '';
$gender = '';
$password = '';
$confirmpassword = '';
$error_array = array();

if(isset($_POST['register_button'])){
  //Registering form values
  $name = strip_tags($_POST['name']); //remove tags
  $_SESSION['name'] = $name;

  //checking username already exists
  $name_check = pg_query($conn,"SELECT * FROM usersregular WHERE name = '$name'");
  $num_name_rows = pg_num_rows($name_check);

  if($num_name_rows > 0){
    array_push($error_array, "username already exists");
  }

  //for email
  $email = strip_tags($_POST['email']); //Remove tags
  $email = str_replace(' ','',$email);
  $_SESSION['email'] = $email;

  //gender
  $gender = $_POST['gender'];

  //for password
  $password = $_POST['password'];
  $confirmpassword = $_POST['cpassword'];


  $date = date("Y-m-d");

  //validating email
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){

    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
 
    //checking email already exist
    $email_check = pg_query($conn,"SELECT * FROM usersregular WHERE email = '$email'");
    $num_rows = pg_num_rows($email_check);

    if($num_rows > 0){
      array_push($error_array, "Email already in use");
    }

  }else{
    array_push($error_array, 'Invalid Email');
  }

  if(strlen($name) > 25 || strlen($name) < 2 ){
    array_push($error_array, "your name must between 2 and 25 charecters");
  }

  if($password != $confirmpassword){
    array_push($error_array, "confirm password is not equal password");
  }else{

  }

  if(strlen($password) > 30 || strlen($password) < 5){
    array_push($error_array, "your password must be between 5 and 30 characters");
  }

  $profile_pic = "assets/images/profile/default/head_alizarin.png";



    $passwordhashed = password_hash($password,PASSWORD_DEFAULT);
    $insertusers = "INSERT INTO usersregular (name, email,gender,password,signup_date,profile_pic,num_post,num_likes,user_closed,friend_arrat) 
    VALUES ('$name', '$email','$gender','$passwordhashed','$date','$profile_pic','0','0','no','0')";
    $run2 = pg_query($conn,$insertusers);
    if($run2 == true){
      echo '<script>window.location.replace("login.php");</script>';
    
  }

}

?>