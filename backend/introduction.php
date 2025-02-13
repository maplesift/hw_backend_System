<!-- From admin.php -->
<style>
.int-logo {
    width: 200px;
    height: 200px;
}
</style>
<div class="col-9 ">
    <h2 class="title title-border">學生介紹管理</h2>

    <form method="post" action="./api/edit.php">
        <div class="p-4 bg-yellow">
            <table width="100%">
                <tr class="bg-yellow1">
                    <td width="8%" class="cent">Logo</td>
                    <td width="10%" class="cent">大圖</td>
                    <td width="9%" class="cent">學生姓名</td>
                    <td width="9%" class="cent">學園</td>
                    <td width="11%" class="cent">社團</td>
                    <td width="10%" class="cent">文字介紹</td>
                    <td width="5%" class="text-primary title">顯示</td>
                    <td width="5%"></td>
                    <td width="5%" class="p-1 text-danger title"></td>
                </tr>
                <tr>


                </tr>

                <?php
                $rows=$Introduction->all();
                // *********
                foreach($rows as $row){
                    
                    ?>
                <tr>
                    <!-- logo -->
                    <td width="8%">
                        <img src="./upload/<?=$row['logo'];?>" class="img-fluid mt-2" style="width:120px;height:120px;">
                    </td>
                    <!-- 大圖 -->
                    <td width="10%">
                        <img src="./upload/<?=$row['img'];?>" class="img-fluid mt-2" style="width:151px;height:201px;">
                    </td>
                    <!-- 學生姓名 -->
                    <td width="9%">
                        <input type="text" name="name[]" value="<?=$row['name'];?>" class="form-control ">
                    </td>
                    <!-- 學校 -->
                    <td width="9%">
                        <!-- <input type="text" name="school[]" value="<?=$row['name'];?>" class="form-control "> -->
                        <img src="./icon/<?=$row['schools'];?>.png" class="img-fluid mt-2"
                            style="width:120px;height:120px;">
                    </td>
                    <!-- 社團 -->
                    <td width="11%">
                        <input type="text" name="societies[]" value="<?=$row['societies'];?>" class="form-control ">
                    </td>
                    <!-- 介紹 -->
                    <td width="10%">
                        <textarea name="text[]" style="width:230px;height:100px;" class="form-control ms-3"><?=$row['text'];?>
                        </textarea>
                    </td>
                    <!-- 顯示 -->
                    <td width="5%">
                        <input type="checkbox" name="sh[]" class="" value="<?=$row['id'];?>"
                            <?=($row['sh']==1)?'checked':'';?>>
                    </td>
                    <td>
                        <input type="button" class="btn btn-warning" width="5%"
                            onclick="op('#modal','#cvr','./modal/upload_<?=$do;?>.php?id=<?=$row['id'];?>&table=<?=$do;?>')"
                            value="更換圖片">
                    </td>
                    <td width="5%">
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
                            value="新增學生介紹" class="btn btn-success">
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