<?php
if(isset($_SESSION['login'])){
    to("admin.php");
    exit();
}

?>

<div class="col-6 w-100 ">
    <h1 class="title w-100 cent">管理登入區</h1>
    <hr>
    <div class="p-4 ">
        <form method="post" action="./api/login.php">
            <p class="title fs-4">帳號 ： <input name="acc" autofocus="" type="text" class=" form-control"></p>
            <p class="title fs-4">密碼 ： <input name="pw" type="password" class=" form-control"></p>
            <p class="cent ">
                <input value="送出" type="submit" class="fs-4 cent btn btn-primary">
                <input type="reset" value="清除" class="fs-4 cent btn btn-warning">
            </p>
        </form>
    </div>
</div>