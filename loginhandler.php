<?php
//declaring variables to prevent error
$email = "";
$password = "";
$loginerror = array(); //error handling array

if(isset($_POST['login'])){
$email = $_POST['email'];
$email = filter_var($email,FILTER_SANITIZE_EMAIL);
$password = $_POST['password'];
$password = password_hash($password,PASSWORD_DEFAULT);
$_SESSION['email'] = $email;

// sql query
$loginquery = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$loginrun = pg_query($conn,$loginquery);
$loginnum = pg_num_rows($loginrun);

//selected greater than 0 go to index
if($loginnum > 0){

    echo '<script>window.location.replace("index.php");</script>';

}elseif($loginnum == 0){

    array_push($loginerror, "Emaail Or Password is wrong");

}

if(strlen($email) == 0){
     array_push($loginerror,"please enter email");
}

if(strlen($password) == 0){
    array_push($loginerror,"Please enter password");
}

}

?>

