<?php
include_once "api/db.php";
if(!isset($_SESSION['login'])){
    echo "請從登入頁登入 <a href='index.php'>管理登入</a>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Archive TW</title>
    <!-- link css 順序 1.bs 2.self -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- sweetalert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="./icon/00SD.gif" sizes="32x32" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="./js/js.js"></script>
    <style>
    * {
        font-family: "Zen Old Mincho", serif;
        font-weight: 400;
        font-style: normal;
    }

    .key-color-bg {
        background-color: #<?=$Title->find(['sh'=>1])['text'];
        ?> !important;
    }
    </style>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark key-color-bg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="./icon/00SD.gif" class="img-fluid logo" alt=""></a>
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
                <button onclick="location.replace('./api/logout.php')" class="btn-login key-color-bg">
                    登出
                </button>
            </div>
        </div>
    </nav>
    <!-- header -->
    <header id="header" style="background-image: url('./upload/<?=$Title->find(['sh'=>1])['img'];?>');">

    </header>
    <div id="modal" style="display:none">
        <div id="coverr">
            <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#modal')"><i
                    class="bi bi-x-square fs-3"></i></a>
            <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
        </div>
        <div id="cover" onclick="cl('#modal')" style="display:none; ">
        </div>
    </div>
    <!-- container1 -->
    <div class="container-fluid " id="container">

        <div class="row">

            <div class="col-1 bg-yellow1 "></div>
            <!-- menu -->
            <div class="col-2 menu">

                <ul>
                    <div class="items-back mt-2">
                        <a href="?do=title" class="highlight-hover del-underline">
                            標題圖片管理
                        </a>
                    </div>
                    <div class="items-back mt-2">
                        <a href="?do=news" class="highlight-hover del-underline">
                            更新消息管理
                        </a>
                    </div>
                    <div class="items-back mt-2">
                        <a href="?do=comic" class="highlight-hover del-underline">
                            官方漫畫管理
                        </a>
                    </div>
                    <div class="items-back mt-2">
                        <a href="?do=introduction" class="highlight-hover del-underline">
                            學生介紹管理
                        </a>
                    </div>
                    <div class="items-back mt-2">
                        <a href="?do=admin" class="highlight-hover del-underline">
                            管理者帳號管理
                        </a>
                    </div>
                    <div class="items-back mt-2">
                        <a href="?do=bottom" class="highlight-hover del-underline">
                            頁尾版權管理
                        </a>
                    </div>
                    <div class="items-back mt-2">
                        <a href="?do=total" class="highlight-hover del-underline">
                            進站總人數管理
                        </a>
                    </div>
                </ul>
            </div>

            <!-- include -->
            <?php
            $do=$_GET['do']??'title';
            $file="./backend/{$do}.php";
            
            if(file_exists($file)){
                include $file;
            }else{
                include "./backend/title.php";
            }
            ?>

            <!-- include end -->
            <!-- <div class="col-1">

            </div> -->
        </div>
    </div>



    <!-- footer -->
    <footer id="footer">
        <div class="footer-link">
            <a href="https://forum.nexon.com/bluearchiveTW/main">
                References
            </a>
            <a href="">
                進站總人數 :<?=$Total->find(1)['total'];?>
            </a>
        </div>
        <div class="footer-content">
            <img src="https://dszw1qtcnsa5e.cloudfront.net/bin/live/console-community-view/assets/forum-web/pc/footer-logo.png"
                alt="" class="logo-nexon">
            <span class="copyright"><?=$Bottom->find(1)['bottom'];?></span>

        </div>
    </footer>
    <!-- footer end -->
    <a href="#top" id="back-to-top"><i class="bi bi-arrow-90deg-up fs-5"></i></a>
    <!-- <img src="./test.html" alt=""> -->
    <!-- js include 順序 1.bs 2.jq 3.self -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <!-- select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

    <script>
    function del(id) {
        Swal.fire({
            title: "確定要刪除嗎?",
            text: "這個動作為不可逆",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "是  我要刪除!",
            cancelButtonText: "還是算了!"
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = `./api/del.php?id=${id}&table=<?=$do;?>`;
            }
        });
    }



    document.addEventListener('DOMContentLoaded', () => {
        const backToTop = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            const scrollTop = window.scrollY || document.documentElement.scrollTop;
            const windowHeight = document.documentElement.scrollHeight - document.documentElement
                .clientHeight;
            const scrollPercent = (scrollTop / windowHeight) * 100;

            if (scrollPercent > 10) {
                backToTop.style.opacity = '1'; // 設為完全不透明
                backToTop.style.visibility = 'visible'; // 顯示按鈕
                backToTop.style.transform = 'translateY(0)'; // 回到原始位置
            } else {
                backToTop.style.opacity = '0'; // 設為完全透明
                backToTop.style.visibility = 'hidden'; // 隱藏按鈕
                backToTop.style.transform = 'translateY(50px)'; // 下移回初始位置
            }
        });
    });


    $(document).ready(function() {
        $('#schools').select2({
            templateResult: formatOption,
            templateSelection: formatOption
        });

        function formatOption(option) {
            if (!option.id) {
                return option.text;
            }
            var img = $(option.element).data('image');
            return $('<span><img src="' + img + '" width="25px" height="25px"/> ' + option.text + '</span>');
        }
    });
    </script>
</body>

</html>