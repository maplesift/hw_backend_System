<?php
if(isset($_SESSION['login'])){
    to("admin.php");
    exit();
}
?>
<div class="col-6 w-100 mx-auto">
    <div class="cent d-flex justify-content-center gap-3 mb-4">
        <button class="box btn btn-primary active" onclick="showLogin()">登入</button>
        <button class="box btn btn-outline-primary" onclick="showRegister()">註冊</button>
    </div>
    <hr>
    <div class="p-4">
        <!-- 登入表單 -->
        <div id="loginForm" class="form-container">
            <p class="title fs-4">帳號：<input name="acc" id="acc" type="text" class="form-control"></p>
            <p class="title fs-4">密碼：<input name="pw" id="pw" type="password" class="form-control"></p>
            <p class="cent d-flex justify-content-center gap-3">
                <input type="submit" value="送出" onclick="login()" class="fs-4 btn btn-primary">
                <input type="reset" value="清除" onclick="resetForm()" class="fs-4 btn btn-warning">
            </p>
        </div>
        
        <!-- 註冊表單 -->
        <div id="registerForm" class="form-container" style="display: none;">
            <p class="title fs-4">帳號：<input name="reg_acc" id="reg_acc" type="text" class="form-control"></p>
            <p class="title fs-4">密碼：<input name="reg_pw" id="reg_pw" type="password" class="form-control"></p>
            <p class="title fs-4">確認密碼：<input name="reg_pw2" id="reg_pw2" type="password" class="form-control"></p>
            <p class="cent d-flex justify-content-center gap-3">
                <input type="submit" value="送出" onclick="reg()" class="fs-4 btn btn-primary">
                <input type="reset" value="清除" onclick="resetForm()" class="fs-4 btn btn-warning">
            </p>
        </div>
    </div>
</div>

<script>





</script>

<style>
    .form-container {
        transition: all 0.3s ease;
    }
    .box{
        width: 72px;
        height: 47px;
    }
</style>