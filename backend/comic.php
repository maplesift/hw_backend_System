<!-- From admin.php -->
<style>

</style>
<div class="col-6 ">
    <h2 class="title">漫畫管理</h2>
    <hr>
    <div class="p-4 bg-yellow">
        <table width="100%">
            <tr class="bg-yellow1">
                <td width="15%" class="title">漫畫</td>
                <td width="7%" class="text-primary title">顯示</td>
                <td width="7%"></td>
                <td width="7%" class=" text-danger title">刪除</td>
            </tr>

            <?php
                $rows=$Comic->all();
                // *********
                foreach($rows as $row){
                    
            ?>
            <tr>

                <td width="15%">
                    <img src="./upload/<?=$row['img'];?>" class="img-fluid mt-2" style="width:230px;height:412px;">
                </td>

                <td width="7%">
                    <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>
                </td>
                <td>
                    <input type="button" class="btn btn-warning"
                        onclick="op('#modal','#cvr','./modal/upload_<?=$do;?>.php?id=<?=$row['id'];?>.php&table=<?=$do;?>')"
                        value="更換圖片">
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
                    <input type="button" onclick="op('#modal','#cvr','./modal/<?=$do;?>.php?table=<?=$do?>')"
                        value="新增漫畫" class="btn btn-success">
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