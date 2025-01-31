<div class="col-6 ">
    <h2 class="title">更新消息</h2>
    <div class="p-4 bg-yellow">
        <ul>
            <li>1</li>
            <li>1</li>
            <li>1</li>
        </ul>
    </div>
</div>
<script>
$(".sswww").hover(
    function() {
        $("#alt").html("" + $(this).children(".all").html() + "").css({
            "top": $(this).offset().top - 25
        })
        $("#alt").show()
    }
)
$(".sswww").mouseout(
    function() {
        $("#alt").hide()
    }
)
</script>