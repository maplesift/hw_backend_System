<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

<?php include_once "db.php";


$chk = $Admin->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);


if ($chk) {
    $_SESSION['login'] = 1;
    echo "<script>alert('登入成功')</script>";
    // to("../admin.php");

}else{
    echo "<script>alert('帳號或密碼錯誤')</script>";
    // to("../index.php?do=main");
}
?>