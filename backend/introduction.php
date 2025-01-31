<!-- From admin.php -->
<div class="col-7 ">
    <h2 class="title">學生介紹管理</h2>
    <hr>
    <form method="post" action="./api/edit.php">
        <div class="p-4 bg-yellow">
            <table width="100%">
                <tr class="bg-yellow1">
                    <td width="25%">大圖</td>
                    <td width="20%">logo</td>
                    <td width="8%" class="">名子</td>
                </tr>
                <tr>
                    <td width="8%" class="">文字介紹</td>
                    <td width="8%" class="">顯示</td>
                    <td width="7%" class="p-1 text-danger title">刪除</td>

                </tr>

                <?php
                $rows=$Introduction->all();
                // *********
                foreach($rows as $row){
                    
                    ?>
                <tr>
                    <td width="23%">
                        <img src="./upload/<?=$row['img'];?>" class="img-fluid mt-2" style="width:115px;height:206px;">
                    </td>
                    <td width="20%">
                        <img src="./upload/<?=$row['logo'];?>" class="img-fluid mt-2" style="width:115px;height:206px;">
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