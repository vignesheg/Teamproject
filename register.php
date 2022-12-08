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
<body>

<body class="img" scrolling="no">




<div style="max-width:30rem;margin-top: 8rem;"
    class="container formcont rounded-5 pb-2 container " id="menu1">
    <div>
        <div>
        <h4 class="pb-3 pb-4 text-center " style='margin-top:10rem;'>Login</h4>
            <form method="POST" action="" class='container' >

                    <input type="text" class="text-white name border border-secondary rounded-pill ps-3 pe-5"
                        style="padding-top: 12px;padding-bottom:12px;" name='email' value = '' placeholder="Email"><br><br>

                    </div>
                    <input type="password" class="name border border-secondary rounded-pill ps-3 pe-5"
                        style="padding-top: 12px;padding-bottom:12px;" name='password'  placeholder="Password"><br><br>
                        <a href="#" class="register" id="register">Don't have an account?Register Here</a>
                    <button class="subbtn  rounded-pill ps-5 pe-5 mb-3"
                        style="padding-top: 12px;padding-bottom:12px;width: 20rem;" name = 'login'  type="submit">Login
                    </button><br>
                </div>
            </form>
    </div>
    </div>
    <div class="">
        <h2 class="pt-4 mb-5 text-center">Register Here</h2>
       
        <form method="POST" action="" >
            <div class="text-center">
                <input type="text" class="text-white name border border-secondary rounded-pill ps-3 pe-5"
                    style="padding-top: 12px;padding-bottom:12px;" name='name' value='' placeholder="username"><br><br>
                <input type="text" class="text-white name border border-secondary rounded-pill ps-3 pe-5"
                    style="padding-top: 12px;padding-bottom:12px;" name='email' value = '' placeholder="Email"><br><br>
                <div class="form-check mb-3 ms-2">
                    <label class="form-check-label me-5" style="font-size:18px;">
                        <input class="form-check-input ms-2 me-2" value='female' type="radio" name="remember" checked>Female
                    </label>

                    <label class="form-check-label me-5" style="font-size:18px;">
                        <input class="form-check-input me-2" type="radio" value='male' name="remember">Male
                    </label>


                    <label class="form-check-label me-5" style="font-size:18px;">
                        <input class="form-check-input me-2" type="radio" value='others' name="remember">others
                    </label>

                </div>
                <input type="password" class="name border border-secondary rounded-pill ps-3 pe-5"
                    style="padding-top: 12px;padding-bottom:12px;" name='password'  placeholder="Password"><br><br>

                <input type="password" class="name border border-secondary rounded-pill ps-3 pe-5"
                    style="padding-top: 12px;padding-bottom:12px;" name='cpassword' placeholder="Conform Password"><br><br>
                    <a href="#" class="login" id="login">Have an account?Login Here</a>
                <button class="subbtn  rounded-pill ps-5 pe-5 mb-3"
                    style="padding-top: 12px;padding-bottom:12px;width: 20rem;"  type="submit">Register
                </button><br>
            </div>
        </form>
    </div>
</div>
</div>

</body>
</html>
