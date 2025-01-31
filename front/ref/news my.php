<div class="di"
    style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
        <?php 
        
// $ads=$Ad->all(['sh'=>1]);
// foreach($ads as $ad){
//     echo $ad['text'];
//     // echo "&nbsp;&nbsp;";
//     echo str_repeat("&nbsp;",4);
// }

?>

    </marquee>
    <div style="height:32px; display:block;"></div>
    <!--正中央-->
    <h3 class=cens>更多最新消息資料</h3>
    <hr>
    <ol class="ssaa" start="1">
        <!-- .all substr foreach -->
        <?php
                $div=5;
                $total=$News->count();
                $pages=ceil($total/$div);
                $now=$_GET['p']??1;
                $start=($now-1)*$div;
                // 空格很重要
                $rows=$News->all(" limit $start,$div");
                echo "<ol start='".($start+1)."'>";
                
                foreach ($rows as $row) {
                    echo "<li>";
                    echo mb_substr($row['text'],0,15);
                    // sapn 必須 style='display: none'
                    echo "<span class='all' style='display: none' >";
                    echo $row['text'];
                    echo "</sapn>";
                    echo "</li>";
                }
            ?>

    </ol>

    <div class="cent">
        <?php
                if(($now-1)>0) {
                    $prev=$now-1;
                    echo "<a href='?do=$do&p=$prev'> < </a>";
                    
                }

                for ($i=1;$i<=$pages;$i++) { 
                    echo "<a href='?do=$do&p=$i'>";
                    echo $i;
                    echo " </a>";
                }
                if(($now+1)<=$pages) {
                    $next=$now+1;
                    echo "<a href='?do=$do&p=$next'> > </a>";
                    
                }
                ?>
    </div>
</div>
<div id="altt" style="position: absolute; width: 350px; min-height: 100px;
            background-color: rgb(255, 255, 204);
            top: 200px; left: 570px; z-index: 99; display: none; 
            padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial;
            background-repeat: initial initial;">
</div>
<script>
$(".ssaa li").hover(
    function() {
        $("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
        $("#altt").show()
    }
)
$(".ssaa li").mouseout(
    function() {
        $("#altt").hide()
    }
)
</script>