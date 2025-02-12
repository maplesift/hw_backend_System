<?php include_once "db.php";
$table=$_GET['table'];
dd($_GET);
$db=ucfirst($table);

$$db->del($_GET['id']);
// echo "delhi";
to("../admin.php?do=$table");