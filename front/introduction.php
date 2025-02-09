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

.int-text {
    font-size: 20px;
    overflow: hidden;

}

.int-th {
    font-size: 20px;
}

.int-back {
    display: flex;
    justify-content: space-around;
    /* width: 200px; */
}

.int-back .img-fluid {
    width: 210px;
}

#introduction-title:hover {}
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
    <div class="col-8 inner">

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
                    echo "<a href='?do=$do&p=$prev#introduction-title'> <i class='bi bi-arrow-left-square'></i> </a>";
                    
                }

                for($i=1;$i<=$pages;$i++){
                    $size=($i==$now)?"28px":"22px";
                    echo "<a href='?do=$do&p=$i#introduction-title' style='font-size:$size'>";
                    // echo  $i;
                    echo  "<span class=' bi bi-$i-square'> </span>";
                    echo " </a>";
                }
                if(($now+1)<=$pages) {
                    $next=$now+1;
                    echo "<a href='?do=$do&p=$next#introduction-title'> <i class='bi bi-arrow-right-square'> </i> </a>";
                    
                }
                ?>
            </div>
            <?php endif ;?>
            <table class="table">
                <tbody>
                    <tr>
                        <th width="10%" class="int-th">頭像</th>
                        <th width="30%" class="int-th">名前</th>
                    </tr>
                    <?php foreach ($rows as $row): ?>

                    <tr>
                        <td width="10%">
                            <!-- 動態生成logo -->
                            <div class="int-logo-div">
                                <a href="?do=<?=$do;?>&id=<?= $row['id']?>&p=<?=$now?>#introduction-title">
                                    <img src="./upload/<?=$row['logo'];?>" class="img-fluid mt-4 int-logo"
                                        style="width:150px;height:150px;">
                                </a>
                            </div>
                        </td>
                        <td width="30%" class="int-name">
                            <?=$row['name'];?>
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
            $stmt = $Introduction->find(['id'=>$id]);
            // dd($stmt);
            // exit();
            // $Introduction->all
            // $stmt->execute([':id' => $id]);
            // $row = $stmt->fetch(PDO::FETCH_ASSOC);
          
            if ($stmt) {
                // 動態生成title
                echo "<h2 class='title title-boder'><a href='?do=$do&p=$now#introduction-title' class='int-a ' id='introduction-title'>學生介紹</a> <i class='bi bi-caret-right'></i> {$stmt['name']} </h2>";
                // 動態生成 img
                echo "<img src='./upload/{$stmt['img']}' class='img-fluid mt-4 int-img'><hr>";
                echo "<pre><div class='int-text'>{$stmt['text']}</div></pre>";
                // 底下回上一頁
                echo "<a href='?do=$do&p=$now#introduction-title' class='int-back'>
                    <img class='img-fluid' src='./icon/introduction.png'>
                    </a>";
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
    </div>