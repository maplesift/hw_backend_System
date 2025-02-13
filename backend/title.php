<!-- From admin.php -->
<style>

</style>
<div class="col-6 ">
    <h2 class="title-border title">標題圖片管理</h2>
    <!-- <hr> -->
    <form method="post" action="./api/edit.php">

        <div class="p-4 bg-yellow">
            <table width="100%">
                <tr class="bg-yellow1">
                    <td width="30%" class="title">標題圖片</td>
                    <td width="7%" class="title">背景顏色</td>
                    <td width="7%" class="text-primary title">顯示</td>
                    <td width="7%"></td>
                    <td width="7%" class=" text-danger title"></td>
                </tr>

                <?php
                $rows=$Title->all();
                // *********
                foreach($rows as $row){
                    
            ?>
                <tr>

                    <td width="30%">
                        <img src="./upload/<?=$row['img'];?>" class="img-fluid mt-2" style="width:275px;height:37px;">
                    </td>
                    <td width="7%">
                        <input type="text" name="text[]" value="<?=$row['text'];?>">
                    </td>
                    <td width="7%">
                        <input type="radio" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>
                    </td>
                    <td width="7%">
                        <input type="button" class="btn btn-warning"
                            onclick="op('#modal','#cvr','./modal/upload_<?=$do;?>.php?id=<?=$row['id'];?>&table=<?=$do;?>')"
                            value="更換圖片">
                    </td>
                    <td width="7%">
                        <input type="button" class="btn btn-danger " onclick="del(<?=$row['id'];?>,<?=$do;?>)" value="刪除">
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
                            value="新增標題圖片" class="btn btn-success">
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