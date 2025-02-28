<?php
include_once "api/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link css 順序 1.bs 2.self -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- sweetalert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="./icon/00아로나SD.gif" sizes="32x32" type="image/png">
    <script src="./js/js.js"></script>
    <style>
    #footer {
        padding: 20px 30px;
        font-size: 12px;
        background-color: #222426;
        text-align: center;
        box-sizing: border-box;
    }

    #footer .footer-link {
        position: relative;
        z-index: 100;
        margin-bottom: 18px;

    }

    #footer .footer-link a:not(:last-child) {
        position: relative;
        padding-right: 10px;
    }

    #footer .footer-content {
        margin-top: 20px;
        line-height: normal;
    }

    #footer .footer-content .logo-nexon {
        width: 73px;
        height: 26px;
        margin: 0 9px;
        object-fit: contain;
    }

    #footer .footer-link a {
        color: #f8f9fa;
        opacity: 0.7;
        text-decoration: none;
    }

    #footer .footer-link a:nth-child(2) {
        font-weight: bold;
    }

    #footer .footer-content .copyright {
        display: inline-block;
        vertical-align: top;
        height: 15px;
        font-size: 11px;
        color: #626465;
        text-align: left;
        margin-top: 1px;
    }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark key-color-bg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="./icon/00아로나SD.gif" class="img-fluid logo" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item text-light">
                        Blue Archive TW
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)"></a>
                    </li>
                </ul>
                <!-- <button class="btn-login key-color-bg" type="button" onclick="login()">登入</button> -->
                <?php
                if(!isset($_SESSION['login'])){
                ?>
                <button onclick="lo('?do=login')" class="btn-login key-color-bg">登入</button>
                <?php
                    }else{
                ?>
                <button onclick="lo('admin.php')" class="btn-login key-color-bg">管理頁面</button>
                <?php
                    }
                ?>
            </div>
        </div>
    </nav>
    <!-- header -->
    <header id="header">

    </header>
    <!-- container1 -->
    <div class="container-fluid " id="container">

        <div class="row">

            <div class="col-1 bg-yellow1 "></div>
            <!-- menu -->
            <div class="col-3 menu">

                <ul>
                    <div class="items mt-4">
                        <a href="?do=news">
                            <img class="img-fluid" src="./icon/01410x100.png" alt="">
                        </a>
                    </div>
                    <div class="items mt-4">
                        <a href="?do=comic">
                            <img class="img-fluid" src="./icon/02410x100.png" alt="">
                        </a>
                    </div>
                    <div class="items mt-4">
                        <a href="?do=introduction">
                            <img class="img-fluid" src="./icon/未命名.png" alt="">
                        </a>

                    </div>
                </ul>
            </div>

            <!-- include -->
            <?php
            $do=$_GET['do']??'main';
            $file="./front/{$do}.php";
            
            if(file_exists($file)){
                include $file;
            }else{
                include "./front/main.php";
            }
                ?>

            <!-- include end -->
            <div class="col-1">

            </div>
        </div>
    </div>




    <!-- footer -->
    <footer id="footer">
        <div class="footer-link">
            <a href="">
                使用者條款
            </a>
            <a href="">
                個人隱私權
            </a>
        </div>
        <div class="footer-content">
            <img src="https://dszw1qtcnsa5e.cloudfront.net/bin/live/console-community-view/assets/forum-web/pc/footer-logo.png"
                alt="" class="logo-nexon">
        </div>
        <span class="copyright"><?=$Bottom->find(1)['bottom'];?></span>

    </footer>
    <!-- <img src="./test.html" alt=""> -->
    <!-- js include 順序 1.bs 2.jq 3.self -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <script>
    function login() {
        location.href = "?do=login"
    }



    $(document).ready(function() {



    });
    </script>
</body>

</html>