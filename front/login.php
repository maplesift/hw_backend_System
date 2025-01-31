<?php
if(isset($_SESSION['login'])){
    to("admin.php");
}
if(isset($_POST['acc'])){
    $row=$Admin->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
    if(!empty($row)){
        $_SESSION['login']=1;
        to("admin.php");
    }else{
        echo "<script>alert('帳號或密碼錯誤')</script>";
    }
}
?>


<div class="col-6 ">
    <h2 class="title">管理登入區</h2>
    <div class="p-4 bg-yellow">
        <form method="post" action="?do=login">
            <p class=" ">帳號 ： <input name="acc" autofocus="" type="text" class=" form-control"></p>
            <p class=" ">密碼 ： <input name="pw" type="password" class=" form-control"></p>
            <p class=" "><input value="送出" type="submit" class=" btn btn-primary">
                <input type="reset" value="清除" class=" btn btn-warning">
            </p>
        </form>
    </div>
</div>