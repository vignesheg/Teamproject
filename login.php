<?php
session_start();
require "mysqldbconn.php";
$username = "";
$enterpassword = "";

if(isset($_POST['login'])){
    $username = $_POST['gmail'];
    $password = $_POST['password']; 
    
    if(empty($username)){
        $requirederr = "Please Enter Your Email Address ";
    }else{
        $requirederr = "";
    }  
    
    if(empty($password)){
        $passworderr = "Please Enter Your Password";
    }else{
        $passworderr = "";
    }  
    
    if(empty($usename) && empty($password)){}else{
    $sql = "SELECT * FROM users WHERE email = '$username'";
    $run = pg_query($conn,$sql);
    $no = pg_num_rows($run);
    $assoc = pg_fetch_assoc($run);



    if($no == 0){}else{
    $hashedpassword = $assoc['password'];
    
    $_SESSION['email'] = $username;
    if(password_verify($password,$hashedpassword)){
        $_SESSION['username'] = $username;
        if(isset($_POST['check'])){
            setcookie('emailcookie',$_POST['email'],time()+3600,'/');
            setcookie('passwordcookie',$_POST['password'],time()+3600,'/');
        }else{
            setcookie('emailcookie',$_POST['email'],time()-3600,'/');
            setcookie('passwordcookie',$_POST['password'],time()-3600,'/');
        }
        header('userslist.php');
    }else{
      $enterpassword = "Wrong Password";
    }
}


if(isset($_COOKIE['emailcookie'])){
       $email = $_COOKIE['emailcookie'];
       $password = $_COOKIE['passwordcookie'];
}else{
    $email = "";
    $password = "";
}}}else{
    $email = "";
    $password = "";
}
?>

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
                        <input class="email" type="email" name="gmail" value="<?php if(isset($_COOKIE['emailcookie'])){ echo $email;}else{ echo $username;} ?>" placeholder="Email address">
                        <p style = "color:Red;margin-bottom:-8px;font-size: small;"><?php if(isset($_POST['login'])){ echo $requirederr;} ?></p>
                    </div><br>
                    <div>
                        <input class="password" type="password" value="<?php echo $password; ?>" name="password" placeholder="Password">
                        <p style = "color:Red;margin-bottom:-6px;font-size: small;"><?php if(isset($_POST['login'])){ echo $passworderr;}?></p>
                        <p style = "color:Red;margin-bottom:-6px;font-size: small;"><?php if(isset($_POST['login'])){ echo $enterpassword;}?></p>
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