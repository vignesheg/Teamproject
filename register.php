<?php 

require 'mysqldbconn.php';

//Declaring variables to prevent error
$name = '';
$email = '';
$gender = '';
$password = '';
$confirmpassword = '';
$error_array = '';

if(isset($_POST)){
  //Registering form values
  $name = strip_tags($_POST['name']); //remove tags

  //for email
  $email = strip_tags($_POST['email']); //Remove tags
  $email = str_replace(' ','',$email);
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){

    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    
  }else{
    echo 'Invalid Email';
  }

  $date = date("Y-m-d");


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
                        style="padding-top: 12px;padding-bottom:12px;" name='name' value='' placeholder="username"><br><br>
                    <input type="text" class="text-white name border border-secondary rounded-pill ps-3 pe-5"
                        style="padding-top: 12px;padding-bottom:12px;" name='email' value = '' placeholder="Email"><br><br>
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