<!-- from ./backend/$do.php -->
<h3 class="cent">更新動畫圖片</h3>
<hr>
<form action="api/upload.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>動畫圖片：</td>
            <td><input type="file" name="img" id="img"></td>
        </tr>

    </table>
    <div class="cent">
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">

        <input type="submit" value="更新">
        <input type="reset" value="重置">
    </div>
</form>