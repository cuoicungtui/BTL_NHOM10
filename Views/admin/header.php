<?php
    if(!isset($_SESSION['Admin']))
        header("location:/BTL_NHOM10/admin/");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="fixed-top ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
            <div class="container-fluid">
                <a class="navbar-brand" href="/BTL_NHOM10/index.php"><img src="/BTL_NHOM10/Views/img/logo.png" alt="" width="30" height="24"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/BTL_NHOM10/?controller=admin&acction=loadViewAdmin">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/BTL_NHOM10/?controller=admin&acction=loadViewAccout">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/BTL_NHOM10/?controller=post&acction=loadPostView">Post</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Vaccine
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Post</a></li>
                                <li><a class="dropdown-item" href="#">Content</a></li>
                                <!-- <li>
                                    <hr class="dropdown-divider">
                                </li> -->
                                <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/BTL_NHOM10/?controller=Admin&acction=logout">Logout</a>
                        </li>
                    </ul>
                  
                </div>
            </div>
        </nav>

    </div>