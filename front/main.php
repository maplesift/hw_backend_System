<style>

</style>
<div class="col-12 inner col-md-8">
    <h2 class="title title-border">最新文章</h2>
    <!-- <hr>     -->
    <div class="p-4 ">

        <ul class="ssaa type-list" style="list-style-type:decimal;">
            <!-- .all substr foreach -->
            <?php
                $all_news=$News->all(['sh'=>1]," limit 10");
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
        <!-- <div id="altt" style="">
        </div> -->
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