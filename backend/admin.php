<!-- From admin.php -->
<div class="col-6 ">
    <h2 class="title title-border">帳號管理</h2>
    <!-- <hr> -->
    <form method="post" action="./api/edit.php">
        <div class="p-4 bg-yellow">
            <table width="100%">
                <tr class="bg-yellow1">
                    <td width="20%">帳號</td>
                    <td width="10%" class="">密碼</td>
                    <td width="15%" class="p-1 text-danger title"></td>

                </tr>

                <?php
                // echo $_SESSION['user'];
                if($_SESSION['user']=='admin'){

                    $rows=$Admin->all();
                }else{
                    $rows=$Admin->all(['acc'=>$_SESSION['user']]);
                }
                // *********
                foreach($rows as $row){
                    
                    ?>
                <tr>

                    <td width="20%">
                        <input type="text" name="acc[]" value="<?=$row['acc'];?>" style="width:97%"
                            class="form-control">
                    </td>
                    <td width="10%">
                        <input type="password" name="pw[]" value="<?=$row['pw'];?>" class="form-control">
                    </td>
                    <td width="15%">
                        <!-- <input type="button" name="del" value="<?=$row['id'];?>" class="bg-danger btn btn-danger ms-2"> -->
                        <input type="button" class="btn btn-danger m-2" onclick="del(<?=$row['id'];?>,<?=$do;?>)" value="刪除">

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
                    <?php
                        if($_SESSION['user']=='admin'):
                        ?>
                        <!-- onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do?>&#39;)" -->
                        <!-- include to admin.php -->
                        <input type="button" onclick="op('#modal','#cvr','./modal/<?=$do;?>.php?table=<?=$do?>')"
                            value="新增帳號" class="btn btn-success">
                    <?php endif; ?>
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
<script>

</script>