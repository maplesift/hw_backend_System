<!-- From admin.php -->

<div class="di"
    style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <!--正中央-->
    <?php include_once "logout.php";?>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
        <p class="t cent botli">管理者帳號管理</p>
        <form method="post" action="./api/edit.php">
            <table width="100%">
                <tr class="yel">
                    <td width="45%">帳號</td>
                    <td width="7%">密碼</td>
                    <td width="7%">刪除</td>

                </tr>
                <?php
                
                $rows=$Admin->all();
                // *********
                foreach($rows as $row){

                ?>
                <tr>

                    <td width="23%">
                        <input type="text" name="acc[]" value="<?=$row['acc'];?>" style="width:97%">
                    </td>
                    <td width="7%">
                        <input type="password" name="pw[]" value="<?=$row['pw'];?>">
                    </td>
                    <td width="7%">
                        <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                    </td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
                <tr>
                    <td width="200px">
                        <!-- include to admin.php -->
                        <input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do?>&#39;)"
                            value="新增管理者帳號">
                    </td>
                    <td class="cent">
                        <input type="hidden" name="table" value="<?=$do;?>">
                        <input type="submit" value="修改確定">
                        <input type="reset" value="重置">
                    </td>
                </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>