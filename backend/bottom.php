<!-- From admin.php -->
<div class="col-6 ">
    <h2 class="title">進站總人數管理</h2>
    <hr>
    <form method="post" action="./api/update_data.php">
        <div class="p-4 ">
            <table width="100%">
                <tr class="bg-yellow1">
                    <td class="text-r">頁尾版權:</td>
                    <td>
                        <!-- <label for="email">進站總人數：</label> -->
                        <input type="text" name="bottom" class="form-control " value="<?=$Bottom->find(1)['bottom'];?>">
                    </td>
                </tr>
            </table>
            <table style="margin-top:40px; width:70%;">
                <tr>
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