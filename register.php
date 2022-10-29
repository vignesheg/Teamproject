<?php 
ob_start();
require "mysqldbconn.php";

  if(isset($_POST['register'])){
    if(isset($_POST['terms'])){
   
    $username=$_POST['username'];
    $display_name = $_POST['displayname'];
    $gmail=$_POST['gmail'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $passwordhash = password_hash($password,PASSWORD_DEFAULT);
    $cpasswordhash = password_hash($cpassword,PASSWORD_DEFAULT);
   
   if($password === $cpassword){
    $sql = "INSERT INTO users (name,display_name,email,gender,password,cpassword)
            VALUES ('$username','$display_name','$gmail','$gender','$passwordhash',' $cpasswordhash','Not Activated')";
            $run = pg_query($conn,$sql);
            if($run == true){
                header('location:login.php');
            }else{
                echo 'failed';
            }
        }else{echo "password doesn,t match";}}else{
          echo "please accept our terms and conditions";
        }}
        ob_end_flush();
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

        .form {
            margin-top: 40px;
        }

        .email {
            width: 100%;
            border-radius: 5px;
            border: 1.5px solid #bdbdbd;
            padding-top: 9px;
            padding-bottom: 9px;
            padding-left: 15px;
            outline: none;
        }

        .password {
            width: 100%;
            border-radius: 5px;
            border: 1.5px solid #bdbdbd;
            padding-top: 9px;
            padding-bottom: 9px;
            padding-left: 15px;
            outline: none;
        }

        .login {
            margin-top: 30px;
        }

        .loginbt {
            border: none;
            background-color: #3b71ca;
            color: #fff;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 35px;
            padding-right: 35px;
            border-radius: 5px;
            box-shadow: 0px 2px 8px #3b71ca;
            width: 100%;
            margin-top: -10px;
        }

        .loginbt:hover {
            background-color: #3f6bb3;
        }

        .img {
            margin-left: 10px;
            height: 35px;
            width: 30px;
            box-shadow: 0px 2px 10px #888888;
            border-radius: 20px;
        }



    /*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: transparent;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: rgb(126, 122, 122) transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent rgb(126, 122, 122) transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-selected {
  color: #4b4b4b;
  padding: 5.3px 16px;
  border: 1px solid transparent;
  border-color: rgb(188, 188, 188);
  cursor: pointer;
  user-select: none;
  border-radius: 5px;
}

.select-items div{
  background-color: white;
  border:1px solid  rgb(254, 254, 254);
  border-top: none;
  padding: 5px;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: white;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
    </style>

</head>

<body>
    <div class="container">
        <div>
            <span style="color:#4b4b4b;font-family: Arial, Helvetica, sans-serif;font-size: 20px;">Sign up with</span>
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
                        <input class="email" type="text" name="displayname" placeholder="Name">
                    </div><br>
                    <div>
                        <input class="email" type="text" name="username" placeholder="Username">
                    </div><br>
                    <div>
                        <input class="email" type="email" name="gmail" placeholder="Email address">
                    </div><br>
                    <!--Gender-->
                    <div class="custom-select" name="gender" style="width:100%;margin-bottom: 24px;">
                        <select name = "gender">
                            <option value="notselected">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Others</option>
                        </select>
                    </div>

                    <div>
                        <input class="email" type="password" name="password" placeholder="conform password">
                    </div><br>
                    <div>
                        <input class="password" type="password" name="cpassword" placeholder="Password">
                    </div>
                    <div style="margin-top: 20px;">
                        <input style="margin-left:80px;" name="terms" type="checkbox">
                        <label style="margin-left:10px ;color:#4b4b4b;">I have read and agree to the terms</label>
                    </div>
                    <div class="login">
                        <input class="loginbt" type="submit" name="register" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var x, i, j, l, ll, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
          selElmnt = x[i].getElementsByTagName("select")[0];
          ll = selElmnt.length;
          /*for each element, create a new DIV that will act as the selected item:*/
          a = document.createElement("DIV");
          a.setAttribute("class", "select-selected");
          a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
          x[i].appendChild(a);
          /*for each element, create a new DIV that will contain the option list:*/
          b = document.createElement("DIV");
          b.setAttribute("class", "select-items select-hide");
          for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                  if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                      y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                  }
                }
                h.click();
            });
            b.appendChild(c);
          }
          x[i].appendChild(b);
          a.addEventListener("click", function(e) {
              /*when the select box is clicked, close any other select boxes,
              and open/close the current select box:*/
              e.stopPropagation();
              closeAllSelect(this);
              this.nextSibling.classList.toggle("select-hide");
              this.classList.toggle("select-arrow-active");
            });
        }
        function closeAllSelect(elmnt) {
          /*a function that will close all select boxes in the document,
          except the current select box:*/
          var x, y, i, xl, yl, arrNo = [];
          x = document.getElementsByClassName("select-items");
          y = document.getElementsByClassName("select-selected");
          xl = x.length;
          yl = y.length;
          for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
              arrNo.push(i)
            } else {
              y[i].classList.remove("select-arrow-active");
            }
          }
          for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
              x[i].classList.add("select-hide");
            }
          }
        }
        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
        </script>
</body>

</html>