<?php
include_once "api/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Archive TW</title>
    <!-- link css 順序 1.bs 2.self -->
    <!-- bs5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- bs5 icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- sweetalert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <link href="./css/media.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="./icon/00SD.gif" sizes="32x32" type="image/png">
    <!-- 字體 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap" rel="stylesheet">

    <!-- jq -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script src="./js/js.js"></script>

    <style>
        * {
            font-family: "Zen Old Mincho", serif;
            font-weight: 400;
            font-style: normal;
        }

        .key-color-bg {
            background-color: #<?= $Title->find(['sh' => 1])['text']; ?>
        }

    </style>
</head>

<body>
    <!-- modal -->
    <div id="modal" style="display:none">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#modal')"><i
                    class="bi bi-x-square fs-3"></i></a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
        <div id="cover" onclick="cl('#modal')" style="display:none; ">
        </div>
    </div>
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark key-color-bg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="./icon/00SD.gif" class="img-fluid logo" alt=""></a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item text-light">
                    Blue Archive TW
                </li>
            </ul>
            <?php
            if (!isset($_SESSION['user'])) {
            ?>
                <button onclick="op('#modal','#cvr','./modal/login.php')" class="btn-login key-color-bg">登入</button>
            <?php
            } else {
            ?>
                <button onclick="lo('admin.php')" class="btn-login key-color-bg">管理頁面</button>
            <?php
            }
            ?>
        </div>
    </nav>


    <!-- header -->
    <header id="header"
        style="background-image: url('./upload/<?= $Title->find(['sh' => 1])['img']; ?>');"
        onclick="location.href='index.php'">

    </header>

    <!-- container1 -->
    <div class="container-fluid " id="container">
        <div class="row">
            <div class="col-1 "></div>
            <!-- menu -->
            <div class="col-3 menu">
                <ul class="menu-items">
                    <li class="items mt-4">
                        <a href="?do=news">
                            <img class="img-fluid" src="./icon/01410x100.png" alt="">
                        </a>
                    </li>
                    <li class="items mt-4">
                        <a href="?do=comic">
                            <img class="img-fluid" src="./icon/02410x100.png" alt="">
                        </a>
                    </li>
                    <li class="items mt-4">
                        <a href="?do=introduction">
                            <img class="img-fluid" src="./icon/introduction.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- include -->
            <?php
            $do = $_GET['do'] ?? 'main';
            $file = "./front/{$do}.php";

            if (file_exists($file)) {
                include $file;
            } else {
                include "./front/main.php";
            }
            ?>
            <!-- include end -->
        </div>
    </div>

    <!-- footer -->
    <footer id="footer">
        <div class="footer-link">
            <a href="https://forum.nexon.com/bluearchiveTW/main" target="_blank">
                References
            </a>
            <a href="">
                進站總人數 :<?= $Total->find(1)['total']; ?>
            </a>
        </div>
        <div class="footer-content">
            <img src="https://dszw1qtcnsa5e.cloudfront.net/bin/live/console-community-view/assets/forum-web/pc/footer-logo.png"
                alt="" class="logo-nexon">
            <span class="copyright"><?= $Bottom->find(1)['bottom']; ?></span>
        </div>

    </footer>
    <a href="#top" id="back-to-top"><i class="bi bi-arrow-90deg-up fs-5"></i></a>
    <!-- footer end -->

    <!-- <img src="./test.html" alt=""> -->
    <!-- js include 順序 1.bs 2.jq 3.self -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    <script>
        $(".ssaa li").hover(
            function() {
                $("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
                $("#altt").show()
            }
        )
        $(".ssaa li").mouseout(
            function() {
                $("#altt").hide()
            }
        )
    </script>
</body>

</html>