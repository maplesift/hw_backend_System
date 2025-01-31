<!-- From admin.php -->

<div class="di"
    style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <!--正中央-->
    <?php include_once "logout.php";?>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
        <p class="t cent botli">頁尾版權資料管理</p>
        <form method="post" action="./api/update_data.php">
            <table width="50%" style="margin:auto;">

                <tr class="yel">
                    <td width="45%">頁尾版權資料:</td>

                    <td>
                        <input type="text" name="bottom" value="<?=$Bottom->find(1)['bottom'];?>">
                    </td>
                </tr>

            </table>
            <table style="margin-top:40px; width:70%;">
                <tr>
                    <td width="200px">

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