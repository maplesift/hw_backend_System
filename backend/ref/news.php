<!-- From admin.php -->

<div class="di"
    style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <!--正中央-->
    <?php include_once "logout.php";?>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
        <p class="t cent botli">最新消息資料管理</p>
        <form method="post" action="./api/edit.php">
            <table width="100%">
                <tr class="yel">
                    <td width="80%">最新消息資料內容</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>

                </tr>
                <?php
                // 參考
                // $db=ucfirst($do);
                // $rows=$db->all();
                $div=4;
                $total=$News->count();
                $pages=ceil($total/$div);
                $now=$_GET['p']??1;
                $start=($now-1)*$div;


                // 空格很重要   
                $rows=$News->all(" limit $start,$div");


                // $rows=$News->all();
                // *********
                foreach($rows as $row){

                ?>
                <tr>

                    <td width="23%">
                        <textarea name="text[]" style="width:300px;height:100px;"><?=$row['text'];?></textarea>
                    </td>
                    <td width=" 7%">
                        <input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>>
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
            <div class="cent">
                <?php
                if(($now-1)>0) {
                    $prev=$now-1;
                    echo "<a href='?do=$do&p=$prev'> < </a>";
                    
                }

                for($i=1;$i<=$pages;$i++){
                    $size=($i==$now)?"24px":"16px";
                    echo "<a href='?do=$do&p=$i' style='font-size:$size'> ";
                    echo $i;
                    echo " </a>";
                }
                if(($now+1)<=$pages) {
                    $next=$now+1;
                    echo "<a href='?do=$do&p=$next'> > </a>";
                    
                }
                ?>
            </div>
            <table style="margin-top:40px; width:70%;">
                <tr>
                    <td width="200px">
                        <!-- include to admin.php -->
                        <input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do?>&#39;)"
                            value="新增最新消息資料">
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