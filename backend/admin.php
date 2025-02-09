<!-- From admin.php -->
<div class="col-6 ">
    <h2 class="title title-border">管理者帳號管理</h2>
    <!-- <hr> -->
    <form method="post" action="./api/edit.php">
        <div class="p-4 bg-yellow">
            <table width="100%">
                <tr class="bg-yellow1">
                    <td width="45%">帳號</td>
                    <td width="8%" class="">密碼</td>
                    <td width="7%" class="p-1 text-danger title">刪除</td>

                </tr>

                <?php
                $rows=$Admin->all();
                // *********
                foreach($rows as $row){
                    
                    ?>
                <tr>

                    <td width="23%">
                        <input type="text" name="acc[]" value="<?=$row['acc'];?>" style="width:97%"
                            class="form-control">
                    </td>
                    <td width="7%">
                        <input type="password" name="pw[]" value="<?=$row['pw'];?>" class="form-control">
                    </td>
                    <td width="7%">
                        <input type="checkbox" name="del[]" value="<?=$row['id'];?>" class="bg-danger ms-2">
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
                        <input type="button" onclick="op('#modal','#cvr','./modal/<?=$do;?>.php?table=<?=$do?>')"
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
    </form>
</div>