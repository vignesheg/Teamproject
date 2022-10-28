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
            border-radius: 20px;
            background-color: white !important;
            color: black !important;
        }

        .hovlink {
            border-radius: 20px;
            padding-left: 20px;
            padding-right: 80px;
        }

        .ptr {
            margin-right: 15px;
        }

        .vrmncnt {
            margin-top: 90px !important;
        }
    </style>
</head>

<body>
    <div style="width:230px;" class=" position-fixed h-100 shadow bg-dark">
        <div class="container-fluid">
            <ul class="navbar-nav align-baseline" style="margin-top:6rem ;">
                <li class="nav-item pb-2">
                    <button class="btn btn-dark hovlink" name="dashboard"><i class="fa-solid fa-gauge-simple"
                            style="font-size:18px;padding-right:5px;"></i>Dashboard</button>
                </li>
                <li class="nav-item pb-2">
                    <form action="" method="POST">
                        <button class="btn btn-dark hovlink" name="userlist"><i class="fa-solid fa-list-ul"
                                style="font-size:18px;padding-right:5px;"></i>Users List</button>
                    </form>
                </li>
                <li class="nav-item pb-2">
                    <form action="" method="POST">
                        <button class="btn btn-dark hovlink" name="userlist"><i class="fa-regular fa-user"
                                style="font-size:18px;padding-right:5px;"></i>Profile</button>
                    </form>
                </li>
                <li class="nav-item pb-2">
                    <form action="" method="POST">
                        <button class="btn btn-dark hovlink " name="userlist"><i class="fa-regular fa-circle-question"
                                style="font-size:18px;padding-right:5px;"></i>F. A. Q</button>
                    </form>
                </li>
                <li class="nav-item pb-2">
                    <form action="" method="POST">
                        <button class="btn btn-dark hovlink" name="userlist"><i class="fa-regular fa-envelope"
                                style="font-size:18px;padding-right:5px;"></i>Contact</button>
                    </form>
                </li>
                <li class="nav-item pb-2">
                    <form action="" method="POST">
                        <button class="btn btn-dark hovlink" name="userlist"><i class="fa-regular fa-note-sticky"
                                style="font-size:18px;padding-right:5px;"></i>Blank</button>
                    </form>
                </li>
            </ul>

        </div>

    </div>
    <div>
        <nav class="navbar navbar-expand-sm bg-white navbar-white shadow-sm fixed-top">
            <div class="container-fluid">
                <img class="img-fluid" src="unnamed.png" alt="New York" width="100" height="50">
                <form class="d-flex position-absolute" style="left: 18rem;">
                    <input class="form-control" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button"><i class="fa-solid fa-magnifying-glass fx-1"></i></button>
                </form>
                <div class="" style="width: 22rem;">
                <ul class="navbar-nav align-baseline" style="margin-right: 0px;">
                    <li class="nav-item ptr">
                        <a class="nav-link" style="font-size: 25px;" href=""><i class="fa-regular fa-message"></i></a>
                    </li>

                    <li class="nav-item ptr">
                        <a class="nav-link" style="font-size:30px ;margin-top: -5px;" href=""><i
                                class="fa-regular fa-bell"></i></i></a>
                    </li>

                    <li class="nav-item ptr">
                        <a class="navbar-brand" href="#">
                            <img src="dashboard-3015057-2503766.webp" alt="Avatar Logo"
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


    <div class="">
        <?php
          require "test.php";
          ?>
    </div>

</body>

</html>