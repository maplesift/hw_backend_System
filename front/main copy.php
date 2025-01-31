<div class="col-6 ">
    <style>
    #altt {
        position: absolute;
        width: 350px;
        min-height: 100px;
        background-color: rgb(255, 255, 204);
        top: 50px;
        left: 130px;
        z-index: 999;
        display: none;
        padding: 5px;
        border: 3px double rgb(255, 153, 0);
        background-position: initial initial;
        background-repeat: initial initial;
    }
    </style>
    <h2 class="title">最新文章</h2>
    <div class="p-4 bg-yellow">

        <ul class="ssaa" style="list-style-type:decimal;">
            <!-- .all substr foreach -->
            <?php
                $all_news=$News->all(['sh'=>1]," limit 5");
                foreach ($all_news as $n) {
                    echo "<li class='mt-2'>";
                    echo mb_substr($n['text'],0,15);
                    // sapn 必須 style='display: none'
                    echo "<span class='all' style='display: none' >";
                    echo $n['text'];
                    echo "</span>";
                    echo "</li>";
                }
            ?>
        </ul>
        <!-- 為黃字框 -->
        <div id="altt" style="">
        </div>
        <script>
        // $(document).ready(function() {
        //     $(".ssaa li").hover(
        //         function() {
        //             $("#altt").html("<pre>" + $(this).find(".all").html() + "</pre>").show();
        //         },
        //         function() {
        //             $("#altt").hide();
        //         }
        //     );
        // });
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
    </div>
</div>