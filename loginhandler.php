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

<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/41e5f9059a.js" crossorigin="anonymous"></script>
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
            height: 100%;
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
</head>
<body>
<h4 class="pb-3 pb-4 text-center " style='margin-top:10rem;'>Login</h4>
            <form method="POST" action="" class='container' >
                <div class="text-center">

                <!-- php for showing error -->
                <div class="alert alert-danger">
                <?php if(in_array("Emaail Or Password is wrong",$loginerror)){
                    echo "Emaail Or Password is wrong";
                } ?>
                 <?php if(in_array("please enter email",$loginerror)){
                    echo "please enter email";
                } ?>
                 <?php if(in_array("Please enter password",$loginerror)){
                    echo "Please enter password";
                } ?>
                
                </div>

                    <input type="text" class="text-white name border border-secondary rounded-pill ps-3 pe-5"
                        style="padding-top: 12px;padding-bottom:12px;" name='email' value = '<?php if(isset($_SESSION['email'])){
                            echo $_SESSION['email'];
                        }?>' placeholder="Email"><br><br>

                    </div>
                    <input type="password" class="name border border-secondary rounded-pill ps-3 pe-5"
                        style="padding-top: 12px;padding-bottom:12px;" name='password'  placeholder="Password"><br><br>
                    <button class="subbtn  rounded-pill ps-5 pe-5 mb-3"
                        style="padding-top: 12px;padding-bottom:12px;width: 20rem;" name = 'login'  type="submit">Login
                    </button><br>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
