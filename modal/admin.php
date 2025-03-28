<!-- from backend/$do.php -->
<h3 class="cent title">新增帳號</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td class="title">帳號：</td>
            <td><input type="text" name="acc" id="text" class="form-control"></td>
        </tr>
        <tr>
            <td class="title">密碼：</td>
            <td><input type="password" name="pw" id="text" class="form-control"></td>
        </tr>
        <tr>
            <td class="title">確認密碼：</td>
            <td><input type="password" name="pw2" id="text" class="form-control"></td>
        </tr>

    </table>
    <div class="cent">
        <!-- *** 藏變數   -->
        <input type="hidden" name="table" value="<?=$_GET['table']?>">

        <input type="submit" value="新增" class="btn btn-success">
        <input type="reset" value="重置" class="btn btn-info">
    </div>
</form>