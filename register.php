<?php 
session_start();

require 'mysqldbconn.php';

//Declaring variables to prevent error
$name = '';
$email = '';
$gender = '';
$password = '';
$confirmpassword = '';
$error_array = array();

if(isset($_POST)){
  //Registering form values
  $name = strip_tags($_POST['name']); //remove tags
  $_SESSION['name'] = $name;

  //checking username already exists
  $email_name = pg_query($conn,"SELECT * FROM usersreqular WHERE name = '$name'");
  $num_name_rows = pg_num_rows($name_check);

  if(pg_num_rows($num_name_rows) > 0){
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
    $email_check = pg_query($conn,"SELECT * FROM usersreqular WHERE email = '$email'");
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

  if(empty($error_arry)){

    $passwordhashed = password_hash($password,DEFAULT_INCLUDE_PATH);
    $insertusers = "INSERT INTO usersregular 
    VALUES ('', '$name', '$email','$gender','$passwordhashed','$date','$profile_pic','0','0','no','0')";
    $run2 = pg_query($conn,$sql);
    if($run2 == true){
      echo '<script>window.location.replace("login.php");</script>';
    }
  }

}

?>
<html>
  <head>
</head>
<body>
<h4 class="pb-3 pb-4 text-center">Have an account?</h4>
            <form method="POST" action="" >
                <div class="text-center">
                    <input type="text" class="text-white name border border-secondary rounded-pill ps-3 pe-5"
                        style="padding-top: 12px;padding-bottom:12px;" name='name' value='
                        <?php if(isset($_SESSION['name'])){
                          echo $_SESSION['name'];
                        }?>
                        ' placeholder="username"><br><br>
                        <?php if(in_array("your name must between 2 and 25 charecters",$error_array)){echo "your name must between 2 and 25 charecters<br>";} ?>
                        <?php if(in_array("username already exists",$error_array)){echo "username already exists<br>";} ?>


                    <input type="text" class="text-white name border border-secondary rounded-pill ps-3 pe-5"
                        style="padding-top: 12px;padding-bottom:12px;" name='email' value = '<?php if(isset($_SESSION['email'])){
                          echo $_SESSION['email'];
                        }?>' placeholder="Email"><br><br>
                        <?php if(in_array("Email already in use",$error_array)){echo "Email already in use<br>";}
                        elseif(in_array('Invalid Email',$error_array)){
                          echo 'Invalid Email';
                        }
                        ?>

                    <div class="form-check mb-3 ms-2">
                        <label class="form-check-label me-5" style="font-size:18px;">
                            <input class="form-check-input ms-2 me-2" value='0' type="radio" name="gender" checked>Female
                        </label>

                        <label class="form-check-label me-5" style="font-size:18px;">
                            <input class="form-check-input me-2" type="radio" value='1' name="gender">Male
                        </label>


                        <label class="form-check-label me-5" style="font-size:18px;">
                            <input class="form-check-input me-2" type="radio" value='2' name="gender">others
                        </label>

                    </div>
                    <input type="password" class="name border border-secondary rounded-pill ps-3 pe-5"
                        style="padding-top: 12px;padding-bottom:12px;" name='password'  placeholder="Password"><br><br>
                        <?php if(in_array("confirm password is not equal password",$error_array)){
                          echo "confirm password is not equal password<br>";
                        }elseif(in_array("your password must be between 5 and 30 characters",$error_array)){
                          echo "your password must be between 5 and 30 characters<br>";
                        }?>

                    <input type="password" class="name border border-secondary rounded-pill ps-3 pe-5"
                        style="padding-top: 12px;padding-bottom:12px;" name='cpassword' placeholder="Conform Password"><br><br>
                    <button class="subbtn  rounded-pill ps-5 pe-5 mb-3"
                        style="padding-top: 12px;padding-bottom:12px;width: 20rem;" name = 'register_button'  type="submit">Register
                    </button><br>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>