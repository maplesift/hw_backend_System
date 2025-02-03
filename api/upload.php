<!-- from ./modal/upload_$do.php -->
<!-- 更新 -->
<?php
include_once "db.php";

$table=$_POST['table'];
$db=ucfirst($table);

// if(!isset($_POST['id'])){
//     exit();
// }
// $id=$_POST['id'];

if (isset($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);

    $row=$$db->find($_POST['id']);
    $row['img']=$_FILES['img']['name'];
    $$db->save($row);
}

if (isset($_FILES['logo']['tmp_name'])) {
    move_uploaded_file($_FILES['logo']['tmp_name'],"../upload/".$_FILES['logo']['name']);

    $row=$$db->find($_POST['id']);
    $row['logo']=$_FILES['logo']['name'];
    $$db->save($row);
}


// to("../admin.php?do=$table");