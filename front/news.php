<div class="col-12 inner col-sm-8">
    <h2 class="title-border  title">更新消息</h2>
    <!-- <hr> -->
    <div class="p-4 ">

        <ul class="ssaa type-list" style="list-style-type:decimal;">
            <!-- .all substr foreach -->
            <?php
                            // 分頁
                            $div=10;
                            $total=$News->count();
                            $pages=ceil($total/$div);
                            $now=$_GET['p']??1;
                            $start=($now-1)*$div;
            
                            // 空格很重要

                $all_news=$News->all(['sh'=>1]," limit $start,$div");
                foreach ($all_news as $n) {
                    echo "<li class='mt-2'>";
                    echo mb_substr($n['text'],0,30);
                    // sapn 必須 style='display: none'
                    echo "<span class='all' style='display: none' >";
                    echo $n['text'];
                    echo "</span>";
                    echo "</li>";
                }
            ?>
        </ul>
        <!-- 為黃字框 -->
        <div id="altt" >
        </div>
        <div class="cent">
            <?php
                if(($now-1)>0) {
                    $prev=$now-1;
                    echo "<a href='?do=$do&p=$prev'> <i class='bi bi-arrow-left-square fs-4'></i> </a>";
                    
                }

                for($i=1;$i<=$pages;$i++){
                    $size=($i==$now)?"29px":"23.63px";
                    echo "<a href='?do=$do&p=$i' style='font-size:$size'>";
                    // echo  $i;
                    echo  "<span class=' bi bi-$i-square'> </span>";
                    echo " </a>";
                }
                if(($now+1)<=$pages) {
                    $next=$now+1;
                    echo "<a href='?do=$do&p=$next'> <i class='bi bi-arrow-right-square fs-4'> </i> </a>";
                    
                }
                ?>
        </div>
        </div>
        <div class="event-banner-box p-4">
            <div class="inner">
            </div>
            <ul>
                <li>
                    <a href="https://www.youtube.com/@bluearchive_tw" target="_blank" rel="noopener noreferrer">
                        <img src="./icon/04820x197.jpg" alt="" class="img-fluid ">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/TW.BlueArchive/" target="_blank" rel="noopener noreferrer">
                        <img src="./icon/05820x197.jpg" alt="" class="img-fluid ">
                    </a>
                </li>
            </ul>
        </div>



</div>