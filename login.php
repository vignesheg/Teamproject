<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
session_start();

require "mysqldbconn.php";


if(isset($_POST['login'])){
    $username = $_POST['gmail'];
    $password = $_POST['password']; 
 
    
if(empty($username)){
    $enteremail = "enter email";
}else{
    $enteremail = "";
}

if(empty($password)){
    $enterpassword = "enter Password";
}else{
    $enterpassword = "";
}

    if(empty($username) &&  empty($password)){}else{
 
 $sql = "SELECT * FROM users WHERE email = '$username'";
 $result = pg_query($conn,$sql);
 $num = pg_num_rows($result);
 $assoc = pg_fetch_assoc($result);

if($num == 0){}else{
    $hashedpassword = $assoc['password'];

    if(password_verify($password,$hashedpassword)){
        if(isset($_POST['check'])){
            setcookie('emailcookie',$_POST['gmail'],time()+3600,'/');
            setcookie('passwordcookie',$_POST['password'],time()+3600,'/');
        }else{
            setcookie('emailcookie',$_POST['gmail'],time()-3600,'/');
            setcookie('passwordcookie',$_POST['password'],time()-3600,'/');
        }
    echo '<script>window.location.replace("dashboard.php");</script>';}else{
        $wrongpassword = "Wrong Password";
    }

    if(isset($_COOKIE['emailcookie'])){
        $email = $_COOKIE['emailcookie'];
        $password = $_COOKIE['passwordcookie'];
 }else{
     $email = "";
     $password = "";
 }}}}else{
     $email = "";
     $password = "";
 } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body::after {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            content: '';
            background: #000;
            opacity: .3;
            z-index: -1;
        }

        body {
            background-image: url("bg.jpg");
            height: 45.25rem;
        }

        .name {
            border: none !important;
            background-color: rgba(245, 245, 245, 0.108);
            color: rgb(255, 250, 250) !important;
            transition: 0.3s;
        }

        .name::placeholder {
            color: rgb(185, 185, 185);
        }

        .name:hover {
            outline: 1px solid #a3a3a3 !important;
            background-color: transparent;
            color: rgb(255, 255, 255) !important;
        }

        .name:focus {
            outline: 1px solid #a3a3a3 !important;
            color: rgb(255, 255, 255);
            background-color: transparent;
        }

        .img {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .formcont {
            color: white;
            box-shadow: 0px 0px 10px #343434;
        }

        .form-check-input:checked {
            background-color: #fbceb5;
            border-color: #fbceb5;
        }

        .subbtn {
            background-color: #fbceb5 !important;
            transition: 0.3s;
            border: none;
            text-decoration: none;
        }

        .subbtn:hover {
            color: #000 !important;
            background-color: #ffbb96 !important;
            text-decoration: none;

        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background-color: #fbceb5 !important;
        }

        .nav-link {
            color: black !important;
        }

        .subbtn-focus {
            border: none;
        }

        .alert-danger {
            --bs-alert-color: #842028ca;
            --bs-alert-bg: #f8d7da7b;
            border: none;
        }
    </style>
    <title>Document</title>
</head>

<body class="img" scrolling="no">

    <div style="margin-top: 8rem;margin-bottom:0rem;max-width: 26rem;" class=" container">

        <ul class="nav nav-pills " style="width: 25rem;">
            <li class="ms-5 nav-item" style="max-width:30rem;">
                <a class=" nav-link active rounded-2 ps-5 pe-5 pt-3 pb-3 me-1" data-bs-toggle="pill"
                    href="#home">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-2 ps-5 pe-5 pt-3 pb-3 ms-1" data-bs-toggle="pill" href="#menu1">Register</a>
            </li>
        </ul>

    </div>

    <div class="tab-content">
        <div style="max-width:30rem;margin-top: 2rem;"
            class="tab-pane container active  formcont rounded-5 pb-2 container " id="home">
            <div class="">
                <h2 class="pt-4 pb-5 text-center">Login</h2>

                <div class="alert alert-danger" style="margin-top: -25px;">
                    <strong>Success!</strong> Indicates a successful or positive action.
                </div>

                <h4 class="pt-3 pb-4 text-center">Have an account?</h4>
                <form>
                    <div class="text-center">
                        <input type="text" name="gmail" value="<?php if(isset($_COOKIE['emailcookie'])){ echo $email;}else{ echo $username;} ?> " class="text-white name border border-secondary rounded-pill ps-3 pe-5"
                            style="padding-top: 12px;padding-bottom:12px;" placeholder="Email or username"><br><br>
                        <input type="password" value="" name="password" class="name border border-secondary rounded-pill ps-3 pe-5"
                            style="padding-top: 12px;padding-bottom:12px;" placeholder="Password"><br><br>
                        <button class="subbtn  rounded-pill ps-5 pe-5 mb-3"
                            style="padding-top: 12px;padding-bottom:12px;width: 20rem;" type="submit">Login
                        </button><br>
                    </div>
                    <div class="form-check mb-3 " style="margin-left: 5rem;">
                        <label class="form-check-label" style="font-size:18px;">
                            <input class="form-check-input" type="checkbox" name="check"> Remember me
                        </label>
                        <a href="#" class="ms-5 text-white" style="text-decoration: none;">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>


        <div style="max-width:30rem;margin-top: 2rem;"
            class="tab-pane container fade  formcont rounded-5 pb-2 container " id="menu1">
            <div class="">
                <h2 class="pt-4 mb-5 text-center">Login 2</h2>

                <div class="alert alert-danger" style="margin-top: -25px;">
                    <strong>Success!</strong> Indicates a successful or positive action.
                </div>

                <h4 class="pb-3 pb-4 text-center">Have an account?</h4>
                <form>
                    <div class="text-center">
                        <input type="text" class="text-white name border border-secondary rounded-pill ps-3 pe-5"
                            style="padding-top: 12px;padding-bottom:12px;" placeholder="username"><br><br>
                        <input type="text" class="text-white name border border-secondary rounded-pill ps-3 pe-5"
                            style="padding-top: 12px;padding-bottom:12px;" placeholder="Email"><br><br>
                        <div class="form-check mb-3 ms-2">
                            <label class="form-check-label me-5" style="font-size:18px;">
                                <input class="form-check-input ms-2 me-2" type="radio" name="remember">Female
                            </label>

                            <label class="form-check-label me-5" style="font-size:18px;">
                                <input class="form-check-input me-2" type="radio" name="remember">Male
                            </label>


                            <label class="form-check-label me-5" style="font-size:18px;">
                                <input class="form-check-input me-2" type="radio" name="remember">others
                            </label>

                        </div>
                        <input type="password" class="name border border-secondary rounded-pill ps-3 pe-5"
                            style="padding-top: 12px;padding-bottom:12px;" placeholder="Password"><br><br>

                        <input type="password" class="name border border-secondary rounded-pill ps-3 pe-5"
                            style="padding-top: 12px;padding-bottom:12px;" placeholder="Conform Password"><br><br>
                        <button class="subbtn  rounded-pill ps-5 pe-5 mb-3"
                            style="padding-top: 12px;padding-bottom:12px;width: 20rem;" type="submit">Login
                        </button><br>
                    </div>
                    <div class="form-check mb-3 " style="margin-left: 5rem;">
                        <label class="form-check-label" style="font-size:18px;">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                        <a href="#" class="ms-5 text-white" style="text-decoration: none;">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>