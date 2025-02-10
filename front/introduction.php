    <style>
.int-img {
    width: 720px;
    height: 960px;
}

.int-logo:hover {}

.int-a {
    color: black;
    font-weight: bold;
}



.int-th {
    font-size: 22px;
}

.int-back {
    display: flex;
    /* justify-content: space-evenly; */
    /* width: 200px; */
}

.int-back .img-fluid {
    width: 250px;
}

.int-societies {
    font-size: 20px;
    vertical-align: middle;

}

.int-items {
    display: flex;
    justify-content: space-evenly;

}

#introduction-title:hover {}


.box {
    min-width: 100px;
    min-height: 100px;
    padding-left: 13px;
    /* background-color: skyblue; */
}

.test {

    height: 800px;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
}
    </style>

    <?php
    // 取得所有頁面的 id 和標題
                // 分頁
                $div=5;
                $total=$Introduction->count();
                $pages=ceil($total/$div);
                $now=$_GET['p']??1;
                $start=($now-1)*$div;
                // $i=0;
                // 空格很重要
                $rows=$Introduction->all(['sh'=>1]," limit $start,$div");


    ?>
    <style>
    </style>
    <div class="col-7  inner">

        <?php if (!isset($_GET['id'])): // 如果沒有選擇頁面，則顯示主頁連結 ?>
        <div class="title title-border "><a href="?do=<?=$do;?>&p=<?=$now;?>#introduction-title" class="int-a"
                id="introduction-title">學生介紹</a>
        </div>
        <!-- <hr> -->
        <div class="p-4 int">
            <?php if (!isset($_GET['id'])): // 如果沒有選擇頁面，則顯示主頁連結 ?>
            <div class="cent">
                <?php
                if(($now-1)>0) {
                    $prev=$now-1;
                    echo "<a href='?do=$do&p=$prev#introduction-title'> <i class='bi bi-arrow-left-square fs-4'></i> </a>";
                    
                }

                for($i=1;$i<=$pages;$i++){
                    $size=($i==$now)?"29px":"23.63px";
                    echo "<a href='?do=$do&p=$i#introduction-title' style='font-size:$size'>";
                    // echo  $i;
                    echo  "<span class=' bi bi-$i-square'> </span>";
                    echo " </a>";
                }
                if(($now+1)<=$pages) {
                    $next=$now+1;
                    echo "<a href='?do=$do&p=$next#introduction-title'> <i class='bi bi-arrow-right-square fs-4'> </i> </a>";
                    
                }
                ?>
            </div>
            <?php endif ;?>
            <table class="table">
                <tbody>
                    <tr>
                        <th width="8%" class="int-th ">頭像</th>
                        <th width="8%" class="int-th ">名前</th>
                        <th width="8%" class="int-th ">学園</th>
                        <th width="8%" class="int-th ">部活</th>
                    </tr>
                    <?php foreach ($rows as $row): ?>

                    <tr>
                        <td width="8%">
                            <!-- 動態生成logo -->
                            <div class="int-logo-div">
                                <a href="?do=<?=$do;?>&id=<?= $row['id']?>&p=<?=$now?>#introduction-title">
                                    <img src="./upload/<?=$row['logo'];?>" class="img-fluid mt-4 int-logo int-radius"
                                        style="width:150px;height:150px;">
                                </a>
                            </div>
                        </td>
                        <!-- 名前 -->
                        <td width="8%" class="int-name">
                            <?=$row['name'];?>
                        </td>
                        <!-- 學員 -->
                        <td width="8%" class="int-name">
                            <img src="./icon/<?=$row['schools'];?>.png" class="img-fluid mt-4 "
                                style="width:150px;height:150px;">
                        </td>
                        <!-- 部活 -->
                        <td width="8%" class="int-societies">
                            <?=$row['societies'];?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
        <?php
        // 讀取選取的頁面內容
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            // $i=$_GET['p'];
            // $sql = "SELECT * FROM introductions WHERE id = :id";
            // $stmt = $pdo->prepare($sql);
            // $stmt = $Introduction->all(['id'=>$id]);
            $prevId= qOne("SELECT * FROM introductions WHERE id < {$id} ORDER BY id DESC LIMIT 1");
            $nextId= qOne("SELECT * FROM introductions WHERE id > {$id} ORDER BY id ASC LIMIT 1");

            $stmt = $Introduction->find(['id'=>$id]);
            // dd($stmt);
            // dd($prevId);
            // dd($nextId);
            // dd($stmt);
            // exit();
            // $Introduction->all
            // $stmt->execute([':id' => $id]);
            // $row = $stmt->fetch(PDO::FETCH_ASSOC);
          
            if ($stmt) {
                // 動態生成title
                echo "<h2 class='title title-border'><a href='?do=$do&p=$now#introduction-title' class='int-a ' id='introduction-title'>學生介紹</a> <i class='bi bi-caret-right'></i> {$stmt['name']} </h2>";
                // 動態生成 img
                echo "<div class='d-flex'>";
                echo "<img src='./upload/{$stmt['img']}' class='img-fluid mt-4 int-img'>";
                echo "<div class='test'>
                <div class='box'>
                <div style='font-size: 25px; font-weight:bold;' class=''>学園
                </div>
                <div>
                <img src='./icon/{$stmt['schools']}.png' class='img-fluid  '
                    style='width:150px;height:150px;'>
                </div>
                </div>
    <div class='box'>
        <div style='font-size: 26px; font-weight:bold; padding-bottom: 10px;' class=' '>部活
        </div>
        <div class='cent'style='font-size:26px;'>
            {$stmt['societies']}
        </div>
    </div>
    <div class='box'>

    </div>
    </div>";
    echo "</div>";

    echo "
    <pre><div class='int-text title-border mt-4'>{$stmt['text']}</div>
                </pre>";

    // footer 回上一頁 ,左右可選跳至上下學生(id)
    echo "<div class='int-items'>";
        echo "<div>";
            if(isset($prevId['id'])){

            echo "<a href='?do=$do&id={$prevId['id']}#introduction-title'>
                <img src='./upload/{$prevId['logo']}' class='img-fluid mt-4 int-logo int-radius'
                    style='width:120px;height:120px;'>
            </a>";
            }
            echo "</div>";

        echo "<div style='display:flex;align-items: center;'>
            <a href='?do=$do&p=$now#introduction-title' class='int-back'>
                <img class='img-fluid' src='./icon/introduction.png'>
            </a>
        </div>";
        echo "<div>";
            if(isset($nextId['id'])){
            echo "<a href='?do=$do&id={$nextId['id']}#introduction-title'>
                <img src='./upload/{$nextId['logo']}' class='img-fluid mt-4 int-logo int-radius'
                    style='width:120px;height:120px;'>
            </a>";
            }

            echo "</div>
    </div>";
    // footer end
    } else {
    echo "<p>找不到此頁面。</p>";
    }
    }

    ?>

        <?php if (!isset($_GET['id'])): // 如果沒有選擇頁面，則顯示主頁連結 ?>
        <div class="cent">
            <?php
                if(($now-1)>0) {
                    $prev=$now-1;
                    echo "<a href='?do=$do&p=$prev#introduction-title'> <i class='bi bi-arrow-left-square'></i> </a>";
                }

                for($i=1;$i<=$pages;$i++){
                    $size=($i==$now)?"28px":"22px";
                    echo "<a href='?do=$do&p=$i#introduction-title' style='font-size:$size'>";
                    // echo  $i;
                    echo  "<span class=' bi bi-$i-square'> </span>";
                    echo "<a href='?do=$do#introduction-title'>  </a>";
                }
                if(($now+1)<=$pages) {
                    $next=$now+1;
                    echo "<a href='?do=$do&p=$next#introduction-title'> <i class='bi bi-arrow-right-square'> </i> </a>";
                    
                }
                ?>
        </div>
        <?php endif ;?>
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