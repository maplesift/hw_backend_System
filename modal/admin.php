<!-- from backend/$do.php -->
<h3 class="cent">新增管理者帳號</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>帳號：</td>
            <td><input type="text" name="acc" id="text"></td>
        </tr>
        <tr>
            <td>密碼：</td>
            <td><input type="password" name="pw" id="text"></td>
        </tr>
        <tr>
            <td>確認密碼：</td>
            <td><input type="password" name="pw2" id="text"></td>
        </tr>

    </table>
    <div class="cent">
        <!-- *** 藏變數   -->
        <input type="hidden" name="table" value="<?=$_GET['table']?>">

        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>