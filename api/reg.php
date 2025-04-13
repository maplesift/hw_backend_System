<?php
include_once "db.php";

// 檢查密碼格式
$password = $_POST['pw'];
if (!preg_match('/^[A-Za-z\d]+$/', $password)) {
    echo 0; // 密碼格式錯誤
    exit;
}

// 移除 pw2，準備儲存
unset($_POST['pw2']);

// 儲存用戶數據
echo $Admin->save($_POST);
?>