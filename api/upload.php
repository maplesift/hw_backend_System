<!-- from ./modal/upload_$do.php -->
<!-- 更新 -->
<?php
include_once "db.php";

$table=$_POST['table'];
dd($_POST);
$db=ucfirst($table);
// if(!isset($_POST['id'])){
//     exit();
// }
// $id=$_POST['id'];

if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);

    $row=$$db->find($_POST['id']);
    $row['img']=$_FILES['img']['name'];
    $$db->save($row);
}

if (!empty($_FILES['logo']['tmp_name'])) {
    move_uploaded_file($_FILES['logo']['tmp_name'],"../upload/".$_FILES['logo']['name']);

    $row=$$db->find($_POST['id']);
    $row['logo']=$_FILES['logo']['name'];
    $$db->save($row);
}

if (!empty($_POST['schools'])) {
    // $row = $$db->find($_POST['id']);
    unset($_POST['table']);
    // $row['schools'] = $_POST['schools']; // 存入選擇的值
    // dd($row);
    $$db->save($_POST);
}

to("../admin.php?do=$table");