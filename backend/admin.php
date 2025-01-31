<!-- From admin.php -->
<div class="col-6 ">
    <h2 class="title">管理員登入區</h2>
    <hr>
    <div class="p-4 bg-yellow">
        <table width="100%">
            <tr class="bg-yellow1">
                <td width="45%">帳號</td>
                <td width="7%">密碼</td>
                <td width="7%" class=" text-danger title">刪除</td>

            </tr>

            <?php
                $rows=$Admin->all();
                // *********
                foreach($rows as $row){
                    
                    ?>
            <tr>

                <td width="23%">
                    <input type="text" name="acc[]" value="<?=$row['acc'];?>" style="width:97%" class="form-control">
                </td>
                <td width="7%">
                    <input type="password" name="pw[]" value="<?=$row['pw'];?>" class="form-control">
                </td>
                <td width="7%">
                    <input type="checkbox" name="del[]" value="<?=$row['id'];?>" class="bg-danger">
                </td>
                <input type="hidden" name="id[]" value="<?=$row['id'];?>">
            </tr>
            <?php
        }
        ?>
        </table>

        <table style="margin-top:40px; width:70%;">
            <tr>
                <td width="200px">
                    <!-- onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do?>&#39;)" -->
                    <!-- include to admin.php -->
                    <input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do?>')"
                        value="新增管理者帳號" class="btn btn-success">
                </td>
                <td class="cent">
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <input type="submit" value="修改確定" class="btn btn-warning">
                </td>
                <td>

                    <input type="reset" value="重置" class="btn btn-info">
                </td>
            </tr>

        </table>
    </div>
</div>