<?php include_once "db.php";
// $acc=$_GET['acc'];
// echo $_GET;
echo $Admin->count(['acc'=>$_GET['acc']]);
// echo $Admin->count($_GET);



?>