<?php include_once "db.php";


$chk = $Admin->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);


if ($chk) {
    $_SESSION['login'] = 1;
    to("../admin.php");
    exit();
}else{
    echo "<script>alert('帳號或密碼錯誤')</script>";
    to("../index.php?do=login");
}