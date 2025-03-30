<style>
    .bg-siv{
        background-color:rgba(249, 255, 243, 0.72);
        /* color:rgb(245, 255, 246); */
    }
    .log:hover{
        background-color: rgba(212, 212, 212, 0.62);
    }
    
</style>
<div class="col-8 ">
    <h2 class="title title-border">網站更新履歷</h2>
    <!-- <hr> -->
    <form method="post" action="./api/edit.php">
        <div class="p-4 bg-siv">
            <table width="100%">
                <tr class="">
                    <td style="width: 4%;" class="title">No</td>
                    <td  class="title">內容</td>
                    <td  class="text-primary title">日期</td>
                </tr>

                <?php
                $rows=$Log->all(" ORDER BY `logs`.`date` DESC ");
                // *********
                foreach($rows as $idx=>$row){
                ?>
                <tr class="log">
                <td width="">
                        <?=$idx+1;?>
                    </td>                    
                    <td width="">
                        <?=$row['text'];?>
                    </td>                    
                    <td width="">
                        <?=mb_substr($row['date'],0,10);?>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
            <div class="cent"><a href=""></a></div>

            <table style="margin-top:40px; width:70%;">
                <tr>
                    <td width="200px">
                        <!-- onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do?>&#39;)" -->
                        <!-- include to admin.php -->
                        <input type="button" onclick="op('#modal','#cvr','./modal/<?=$do;?>.php?table=<?=$do?>')"
                            value="新增文字" class="btn btn-success">
                    </td>
                    <td class="cent">
                        <input type="hidden" name="table" value="<?=$do;?>">
                    </td>
                    <td>

                    </td>
                </tr>

            </table>
        </div>
    </form>
</div>