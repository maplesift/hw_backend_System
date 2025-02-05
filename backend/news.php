<!-- From admin.php -->
<div class="col-6 ">
    <h2 class="title">更新消息管理</h2>
    <hr>
    <form method="post" action="./api/edit.php">
        <div class="p-4 bg-yellow">
            <table width="100%">
                <tr class="bg-yellow1">
                    <td width="10%" class="title">更新消息</td>
                    <td width="8%" class="text-primary title">顯示</td>
                    <td width="7%" class="p-1 text-danger title">刪除</td>

                </tr>

                <?php
                $rows=$News->all();
                // *********
                foreach($rows as $row){
                    
                    ?>
                <tr>
                    <td width="10%">
                        <textarea name="text[]" style="width:400px;height:150px;" class="form-control mt-2"><?=$row['text'];?>
                        </textarea>
                    </td>
                    <td width=" 7%">
                        <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>
                    </td>
                    <td width="7%">
                        <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
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
                            value="新增文字" class="btn btn-success">
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