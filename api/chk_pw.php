<?php include_once "db.php";
// $acc=$_GET['acc'];

// echo $User->count(['acc'=>$acc]);
$chk=$Admin->count($_POST);
if($chk){
    echo $chk;
    $_SESSION['login'] = 1;
}else{
    echo 0;
}




?>