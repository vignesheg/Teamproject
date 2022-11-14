<?php 

require 'mysqldbconn,php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/41e5f9059a.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .hovlink:hover {
            padding-left: 20px;
            padding-right: 80px;
            border-radius: 5px;
            background-color: rgba(210, 210, 210, 0.121) !important;
            color: white !important;
        }

        .hovlink {
            border-radius: 5px;
            padding-left: 20px;
            padding-right: 80px;
        }

        .ptr {
            margin-right: 15px;
        }

        .vrmncnt {
            margin-top: 90px !important;
        }

        .iframe{
            overflow: visible ;
        }


        @media only screen and (max-width: 600px) {
            .vrmn {
                display: none;
            }
        }

        @media only screen and (max-width: 600px) {
            .img {
                display: inline !important;
            }
        }

        @media only screen and (max-width: 600px) {
            .links {
                display: none;
            }
        }

        @media only screen and (min-width:600px) {
            .smmenu {
                display: none;
            }
        }

        @media only screen and (max-width: 600px) {
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;


            }

            li {
                float: right;
            }

            li a {
                display: block;
                color: #666;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover:not(.active) {
                background-color: #ddd;
            }


        }
    </style>
</head>

<body style = 'background-color:rgba(200, 200, 200, 0.317);'>

    <div class="smmenu fixed-top shadow-sm bg-white">
        <ul>
            <li><a class="active" href="#home"><i class="fa-regular fa-message"></i></a></li>
            <li><a href="#news" class="li"><i  class="fa-regular fa-bell"></i></a></li>
            <li><a href="#contact"><img src="dashboard-3015057-2503766.webp" alt="Avatar Logo"
                        style="width:20px;margin-top: -5px;" class="rounded-pill"></a></li>


            <li style="margin-top: 13px;">
                <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                    data-bs-toggle="dropdown">vignesh</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Link</a></li><br>
                    <li><a class="dropdown-item" href="#">Another link</a></li><br>
                    <li><a class="dropdown-item" href="#">A third link</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div>
        <nav class="links navbar navbar-expand-sm bg-white navbar-white shadow-sm fixed-top">
            <div class="container-fluid">
                <img class="img img-fluid" src="../images/unnamed.png" alt="New York" width="100" height="50">
                <div class="" style="width: 22rem;">
                    <ul class="navbar-nav align-baseline" style="margin-right: 0px;">
                        <li class="nav-item ptr">
                            <a class="nav-link" style="font-size: 25px;" href=""><i
                                    class="fa-regular fa-message"></i></a>
                        </li>

                        <li class="nav-item ptr">
                            <a class="nav-link" style="font-size:30px ;margin-top: -5px;" href=""><i
                                    class="fa-regular fa-bell"></i></i></a>
                        </li>

                        <li class="nav-item ptr">
                            <a class="navbar-brand" href="#">
                                <img src="../images/dashboard-3015057-2503766.webp" alt="Avatar Logo"
                                    style="width:40px;margin-top: 4px;" class="rounded-pill">
                            </a>
                        </li>

                        <li class="nav-item dropdown" style="margin-top: 3px;margin-left: -17px;">
                            <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                                data-bs-toggle="dropdown">vignesh</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Link</a></li>
                                <li><a class="dropdown-item" href="#">Another link</a></li>
                                <li><a class="dropdown-item" href="#">A third link</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
      
    </div>

    <div id="vrmn" style="width:230px;" class="vrmn position-fixed h-100 shadow bg-dark">
        <div class="container-fluid">
            <ul class="navbar-nav align-baseline" style="margin-top:6rem ;">
                <li class="nav-item pb-2">
                    <a href="#" class="hovlink nav-link text-light"><i class="fa-solid fa-gauge-simple"
                            style="font-size:18px;padding-right:5px;"></i>Dashboard</a> </li>
                <li class="nav-item pb-2">
                    <a href="#" class="hovlink nav-link text-light"><i class="fa-solid fa-users"
                            style="font-size:18px;padding-right:5px;"></i>users list</a>
                </li>
            </ul>

        </div>

    </div>

 <?php //sidebar ?>
 

 

  

    <div class="position-absolute" style= 'margin-left:260px;top:10rem;width:85%;' > 

<?php include('../userslist.php'); ?>

<a href = '#'>update</a>

</div>
            
</body>

</html>