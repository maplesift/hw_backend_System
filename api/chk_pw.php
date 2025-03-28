<?php include_once "db.php";
// $acc=$_GET['acc'];

// echo $User->count(['acc'=>$acc]);
$chk=$Admin->count($_POST);
if($chk){
    $_SESSION['user'] = $_POST['acc'];
    echo $chk;
}else{
    echo 0;
}




?>