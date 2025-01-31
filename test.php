<?php
// include_once "./api/db.php";

$_POST = [
    'id' => ['1', '2', '3'],                // ID 清單
    'text' => ['Home', 'About', 'Contact'], // 對應的文字
    'href' => ['/home', '/about', '/contact'], // 對應的連結
    'del' => ['1'],                         // 被選中要刪除的 ID
];

foreach($_POST['id'] as $idx => $id);

echo "<pre>";
print_r($idx);
echo "</pre>";
echo "<pre>";
print_r($_POST['id'][$idx]);
echo "</pre>";

echo $id;



?>