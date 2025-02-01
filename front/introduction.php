    <style>
.int-img {
    width: 720px;
    height: 960px;
}

.int-logo:hover {}

.int-a {
    color: black;
}

.int-text {
    font-size: 18px;
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

                // 空格很重要
                $rows=$Introduction->all(['sh'=>1]," limit $start,$div");


    ?>
    <style>
    </style>
    <div class="col-8 inner">

        <?php if (!isset($_GET['id'])): // 如果沒有選擇頁面，則顯示主頁連結 ?>
        <h2 class="title"><a href="?do=introduction" class="int-a highlight-hover">學生介紹</a></h2>
        <hr>
        <div class="p-4 int">
            <table class="table">
                <tbody>
                    <tr>
                        <th width="10%">頭像</th>
                        <th width="30%">名前</th>
                    </tr>
                    <?php foreach ($rows as $row): ?>

                    <tr>
                        <td width="10%">
                            <div class="int-logo-div">

                                <a href="?do=<?=$do;?>&id=<?= $row['id'] ?>">
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
                echo "<h2 class='title'><a href='?do=$do' class='int-a highlight-hover'>學生介紹</a> <i class='bi bi-caret-right'></i> {$stmt['name']} </h2><hr>";
                echo "<img src='./upload/{$stmt['img']}' class='img-fluid mt-4 int-img'><hr>";
            echo "<pre><div class='int-text'>{$stmt['text']}</div></pre>";
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
                    echo "<a href='?do=$do&p=$prev'> <i class='bi bi-arrow-left-square'></i> </a>";
                    
                }

                for($i=1;$i<=$pages;$i++){
                    $size=($i==$now)?"24px":"16px";
                    echo "<a href='?do=$do&p=$i' style='font-size:$size'>";
                    // echo  $i;
                    echo  "<span class=' bi bi-$i-square'> </span>";
                    echo " </a>";
                }
                if(($now+1)<=$pages) {
                    $next=$now+1;
                    echo "<a href='?do=$do&p=$next'> <i class='bi bi-arrow-right-square'> </i> </a>";
                    
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