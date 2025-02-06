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

        <p class="title fs-4">帳號 ： <input name="acc" id="acc" type="text" class=" form-control"></p>
        <p class="title fs-4">密碼 ： <input name="pw" id="pw" type="password" class=" form-control"></p>
        <p class="cent ">
            <input type="submit" value="送出" onclick='login()' class="fs-4 cent btn btn-primary">
            <input type="reset" value="清除" onclick='resetForm()' class="fs-4 cent btn btn-warning">
        </p>
    </div>
</div>