<h3 class="cent title">修改漫畫圖片:</h3>
<hr>
<form action="api/upload.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td class="title">漫畫:</td>
            <td><input type="file" name="img" id="img" class="form-control"></td>
        </tr>

    </table>
    <div class="cent">
        <input type="submit" value="修改" class="btn btn-warning">
        <input type="reset" value="重置" class="btn btn-info">
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    </div>
</form>