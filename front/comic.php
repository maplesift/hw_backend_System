<style></style>

<div class="col-8 inner">
    <h2 class="title title-border" id="comic-title">官方漫畫</h2>
    <div class="p-4 ">
        <?php

                // 分頁
                $div=1;
                $total=$Comic->count();
                $pages=ceil($total/$div);
                $now=$_GET['p']??1;
                $start=($now-1)*$div;

                // 空格很重要
                $rows=$Comic->all(['sh'=>1]," limit $start,$div");
        // $rows=$Comic->all(['sh'=>1], "limit 2");
        // *********
        ?>
        <div class="cent">
            <?php
                if(($now-1)>0) {
                    $prev=$now-1;
                    echo "<a href='?do=$do&p=$prev#comic-title'> <i class='bi bi-arrow-left-square fs-4'></i> </a>";
                    
                }

                for($i=1;$i<=$pages;$i++){
                    $size=($i==$now)?"29px":"22px";
                    echo "<a href='?do=$do&p=$i#comic-title' style='font-size:$size'>";
                    // echo  $i;
                    echo  "<span class=' bi bi-$i-square '> </span>";
                    echo " </a>";
                }
                if(($now+1)<=$pages) {
                    $next=$now+1;
                    echo "<a href='?do=$do&p=$next#comic-title'> <i class='bi bi-arrow-right-square fs-4'> </i> </a>";
                    
                }
                ?>
        </div>
        <?php foreach($rows as $row):
        ?>
        <div class="title-border">
            <img src="./upload/<?=$row['img'];?>" class="img-fluid mt-2 " style="width:880px;height:1584px;">

        </div>
        <?php endforeach ;?>
        <div class="cent">
            <?php
                if(($now-1)>0) {
                    $prev=$now-1;
                    echo "<a href='?do=$do&p=$prev#comic-title'> <i class='bi bi-arrow-left-square'></i> </a>";
                    
                }

                for($i=1;$i<=$pages;$i++){
                    $size=($i==$now)?"28px":"22px";
                    echo "<a href='?do=$do&p=$i#comic-title' style='font-size:$size'>";
                    // echo  $i;
                    echo  "<span class=' bi bi-$i-square'> </span>";
                    echo " </a>";
                }
                if(($now+1)<=$pages) {
                    $next=$now+1;
                    echo "<a href='?do=$do&p=$next#comic-title'> <i class='bi bi-arrow-right-square'> </i> </a>";
                    
                }
                ?>
        </div>

        <!--event-banner-box  -->
        <div class="event-banner-box">
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
</div>