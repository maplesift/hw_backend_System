<!-- From admin.php -->
<style>
.int-logo {
    width: 200px;
    height: 200px;
}
</style>
<div class="col-8 ">
    <h2 class="title">學生介紹管理</h2>
    <hr>
    <form method="post" action="./api/edit.php">
        <div class="p-4 bg-yellow">
            <table width="100%">
                <tr class="bg-yellow1">
                    <td width="10%">Logo</td>
                    <td width="10%">大圖</td>
                    <td width="8%" class="">學生姓名</td>
                    <td width="5%" class="">文字介紹</td>
                    <td width="5%" class="text-primary title">顯示</td>
                    <td width="7%"></td>
                    <td width="7%" class="p-1 text-danger title">刪除</td>
                </tr>
                <tr>


                </tr>

                <?php
                $rows=$Introduction->all();
                // *********
                foreach($rows as $row){
                    
                    ?>
                <tr>
                    <td width="10%">
                        <img src="./upload/<?=$row['logo'];?>" class="img-fluid mt-2" style="width:120px;height:120px;">
                    </td>
                    <td width="10%">
                        <img src="./upload/<?=$row['img'];?>" class="img-fluid mt-2" style="width:151px;height:201px;">
                    </td>
                    <td width="8%">
                        <input type="text" name="name[]" value="<?=$row['name'];?>" class="form-control ">
                    </td>
                    <td width="5%">
                        <textarea name="text[]" style="width:300px;height:100px;" class="form-control ms-3"><?=$row['text'];?>
                        </textarea>
                    </td>
                    <td width="5%">
                        <input type="checkbox" name="sh[]" class="" value="<?=$row['id'];?>"
                            <?=($row['sh']==1)?'checked':'';?>>
                    </td>
                    <td>
                        <input type="button" class="btn btn-warning" width="7%"
                            onclick="op('#cover','#cvr','./modal/upload_<?=$do;?>.php?id=<?=$row['id'];?>.php&table=<?=$do;?>')"
                            value="更換圖片">
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
                        <input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do?>')"
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
    </form>
</div>