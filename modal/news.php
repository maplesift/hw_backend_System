<!-- from backend/$do.php -->
<h3 class="cent title">新增最新消息資料</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">

    <div>

        <td class="title">新增消息:</td>
    </div>
    <table>
        <tr>
            <textarea name="text" style="width:300px;height:100px;" class="cent form-control"></textarea>
        </tr>

    </table>
    <div class="cent mt-2">
        <!-- *** 藏變數 val=ad  -->
        <input type="hidden" name="table" value="<?=$_GET['table']?>">

        <input type="submit" value="新增" class="btn btn-success">
        <input type="reset" value="重置" class="btn btn-info">
    </div>
</form>