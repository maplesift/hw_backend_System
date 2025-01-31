<!-- from backend/$do.php -->
<h3 class="cent title">新增學生介紹</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <style>
    .padding-l {
        padding-left: 7px;
    }

    .padding-t {
        padding-top: 7px;
    }

    .w {

        width: 12%;
    }
    </style>
    <table>
        <tr>
            <td class="title">大圖:</td>
            <td><input type="file" name="img" id="img" class=" form-control"></td>
        </tr>
        <tr>
            <td class="title padding-l">logo:</td>
            <td><input type="file" name="logo" id="logo" class="form-control"></td>
        </tr>
        <tr class="padding-t">
            <td class="title w">學生姓名:</td>
            <td><input type="password" name="name" id="name" class="form-control"></td>
        </tr>

        <div>

        </div>

        <tr class="mt-3">
            <td class="title">文字介紹:</td>
            <td>
                <textarea name="text" style="width:500px;height:100px;" class="cent form-control"></textarea>
            </td>
        </tr>
    </table>
    <div class="cent mt-3">
        <!-- *** 藏變數   -->
        <input type="hidden" name="table" value="<?=$_GET['table']?>">

        <input type="submit" value="新增" class="btn btn-success">
        <input type="reset" value="重置" class="btn btn-info">
    </div>
</form>