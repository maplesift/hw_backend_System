<h3 class="cent title">新增漫畫圖片:</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td class="title">漫畫:</td>
            <td><input type="file" name="img" id="img" class="form-control"></td>
        </tr>

    </table>
    <div class="cent">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增" class="btn btn-success">
        <input type="reset" value="重置" class="btn btn-info">
    </div>
</form>