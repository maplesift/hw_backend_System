<?php include_once "db.php";

$password = $_POST['pw'] ?? '';
if (!preg_match('/^[A-Za-z\d]+$/', $password)) {
    echo 0; // 密碼格式錯誤，返回 0
    exit;
}

$chk=$Admin->count($_POST);
if($chk){
    $_SESSION['user'] = $_POST['acc'];
    echo $chk;
}else{
    echo 0;
}

?>