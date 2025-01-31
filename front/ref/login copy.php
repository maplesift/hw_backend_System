<?php
if(isset($_SESSION['login'])){
    to("admin.php");
}
if(isset($_POST['acc'])){
    $row=$Admin->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
    if(!empty($row)){
        $_SESSION['login']=1;
        to("admin.php");
    }else{
        echo "<script>alert('帳號或密碼錯誤')</script>";
    }
}

?>
<div class="col-6 ">
    <h2 class="title">login</h2>
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
            "top": $(this).offset().top - 50
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