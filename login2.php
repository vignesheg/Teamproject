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
$row = pg_fetch_assoc($num);

echo $row['email'];

if($result){
    echo "query running"
}else{
    echo "query not running";
}

if($num == 1){
    echo "query selected";
}}?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .container {
            max-width: 495px;
            margin-top: 200px;
        }


        .signin {
            text-align: center;
        }

        .form{
            margin-top: 50px;
        }

        .email{
                width: 100%;
                border-radius: 5px;
                border: 1.5px solid #bdbdbd;
                padding-top: 9px;
                padding-bottom: 9px;
                padding-left: 15px;
                outline: none;
            }

         <?php if(isset($_POST['login'])){
            if(empty($username)){
         echo '.email{
            width: 100%;
            border-radius: 5px;
            border: 1.5px solid red;
            padding-top: 9px;
            padding-bottom: 9px;
            padding-left: 15px;
            outline: none;}';
        }
        }
         ?>
        .password{
            width: 100%;
            border-radius: 5px;
            border: 1.5px solid #bdbdbd;
            padding-top: 9px;
            padding-bottom: 9px;
            padding-left: 15px;
            outline: none;
        }

        <?php if(isset($_POST['login'])){
            if(empty($password)){
                echo '.password{
                    width: 100%;
                    border-radius: 5px;
                    border: 1.5px solid red;
                    padding-top: 9px;
                    padding-bottom: 9px;
                    padding-left: 15px;
                    outline: none;}';
        }  }?>

        .login{
            margin-top: 30px;
        }

        .loginbt{
            border: none;
            background-color: #3b71ca;
            color: #fff;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 35px;
            padding-right: 35px;
            border-radius: 5px;
            box-shadow: 0px 2px 10px #3b71ca;;
        }

        .loginbt:hover{
            background-color: #3f6bb3;
        }

        .img{
            margin-left: 10px;
            height: 35px;
            width: 30px;
            box-shadow: 0px 2px 10px #888888 ;
            border-radius: 20px;
        }


       
    </style>

</head>

<body>
    <div class="container">
        <div>
            <span style="color:#4b4b4b;font-family: Arial, Helvetica, sans-serif;font-size: 20px;">Sign in with</span>
            <img class="img" src="facebook-svgrepo-com.svg">
            <img class="img" src="1534129544.svg">
        </div>
        <div style="text-align: center;margin-top:20px;">
            ----Or----
        </div>
        <div>
            <div class="form">
                <form action="" method="POST">
                    <div>
                        <input class="email" type="email" name="gmail" value="" placeholder="Email address">
                    </div><br>
                    <div>
                        <input class="password" type="password" value="" name="password" placeholder="Password">
                    </div>
                    <input style="margin-top:20px;" type="checkbox" name="check"><label style="font-family:Arial, Helvetica, sans-serif;margin-left: 5px;color:#424242;">Remember Me</label>
                    <a href="#" style="text-decoration: none;margin-left: 210px;color:#3e3d3d;">Forgot Password?</a>
                    <div class="login"> 
                        <input class="loginbt" type="submit" name="login" value="Login">
                    </div>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Not  a  Member? <a href="register.php" class="link-danger" style="text-decoration:none;">Register?</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

