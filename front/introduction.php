    <style>


    </style>
    <?php
    // 取得所有頁面的 id 和標題
    // 分頁
    $div = 5;
    $total = $Introduction->count();
    $pages = ceil($total / $div);
    $now = $_GET['p'] ?? 1;
    $start = ($now - 1) * $div;
    // $i=0;
    // 空格很重要
    $rows = $Introduction->all(['sh' => 1], " limit $start,$div");
    ?>
    <style>
    </style>
    <div class="col-12 inner col-sm-8">
        <?php if (!isset($_GET['id'])): // 如果沒有選擇頁面，則顯示主頁連結 
        ?>
            <div class="title title-border "><a href="?do=<?= $do; ?>&p=<?= $now; ?>#introduction-title" class="int-a"
                    id="introduction-title">學生介紹</a>
            </div>
            <!-- <hr> -->
            <div class="p-4 int">
                <!-- 分頁 -->
                <div class="cent">
                    <?php
                    if (($now - 1) > 0) {
                        $prev = $now - 1;
                        echo "<a href='?do=$do&p=$prev#introduction-title'> <i class='bi bi-arrow-left-square fs-4'></i> </a>";
                    }

                    for ($i = 1; $i <= $pages; $i++) {
                        $size = ($i == $now) ? "29px" : "23.63px";
                        echo "<a href='?do=$do&p=$i#introduction-title' style='font-size:$size'>";
                        // echo  $i;
                        echo  "<span class=' bi bi-$i-square'> </span>";
                        echo " </a>";
                    }
                    if (($now + 1) <= $pages) {
                        $next = $now + 1;
                        echo "<a href='?do=$do&p=$next#introduction-title'> <i class='bi bi-arrow-right-square fs-4'> </i> </a>";
                    }
                    ?>
                </div>
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
                                        <a href="?do=<?= $do; ?>&id=<?= $row['id'] ?>&p=<?= $now ?>#introduction-title">
                                            <img src="./upload/<?= $row['logo']; ?>" class="img-fluid mt-4 int-logo int-title-logo int-radius">
                                        </a>
                                    </div>
                                </td>
                                <!-- 名前 -->
                                <td width="8%" class="int-name">
                                    <?= $row['name']; ?>
                                </td>
                                <!-- 學員 -->
                                <td width="8%" class="int-name">
                                    <img src="./icon/<?= $row['schools']; ?>.png" class="img-fluid mt-4 int-title-logo">
                                </td>
                                <!-- 部活 -->
                                <td width="8%" class="int-societies">
                                    <?= $row['societies']; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- 分頁 -->
                <div class="cent">
                    <?php
                    if (($now - 1) > 0) {
                        $prev = $now - 1;
                        echo "<a href='?do=$do&p=$prev#introduction-title'> <i class='bi bi-arrow-left-square fs-4'></i> </a>";
                    }

                    for ($i = 1; $i <= $pages; $i++) {
                        $size = ($i == $now) ? "28px" : "22px";
                        echo "<a href='?do=$do&p=$i#introduction-title' style='font-size:$size'>";
                        // echo  $i;
                        echo  "<span class=' bi bi-$i-square'> </span>";
                        echo "<a href='?do=$do#introduction-title'>  </a>";
                    }
                    if (($now + 1) <= $pages) {
                        $next = $now + 1;
                        echo "<a href='?do=$do&p=$next#introduction-title'> <i class='bi bi-arrow-right-square fs-4'> </i> </a>";
                    }
                    ?>
                </div>
            </div>
        <?php endif; ?>
        <!-- =================單獨學生介紹========================= -->
        <?php
        // 讀取選取的頁面內容
        if (isset($_GET['id'])) :
            $id = $_GET['id'];
            // $i=$_GET['p'];
            // $sql = "SELECT * FROM introductions WHERE id = :id";
            // $stmt = $pdo->prepare($sql);
            // $stmt = $Introduction->all(['id'=>$id]);
            $prevId = qOne("SELECT * FROM introductions WHERE id < {$id} ORDER BY id DESC LIMIT 1");
            $nextId = qOne("SELECT * FROM introductions WHERE id > {$id} ORDER BY id ASC LIMIT 1");

            $stmt = $Introduction->find(['id' => $id]);
            // dd($stmt);
            // dd($prevId);
            // dd($nextId);
            // dd($stmt);
            // exit();
            // $Introduction->all
            // $stmt->execute([':id' => $id]);
            // $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
            <?php if ($stmt): ?>
                <h2 class="title title-border"><a href="?do=<?= $do ?>&p=<?= $now ?>#introduction-title" class='int-a ' id='introduction-title'>學生介紹</a> <i class='bi bi-caret-right'></i> <?= $stmt['name']; ?> </h2>
                <div class="int-flex">
                    <img src="./upload/<?= $stmt['img']; ?>" class="img-fluid mt-4 int-img">
                    <div class='int-col'>
                        <div class='box'>
                            <div style='font-size: 25px; font-weight:bold;' class=''>学園
                            </div>
                            <div style="text-align: center;">
                                <img src="./icon/<?= $stmt['schools'] ?>.png" class="img-fluid  "
                                    style='width:150px;height:150px;'>
                            </div>
                        </div>
                        <div class='box'>
                            <div style='font-size: 26px; font-weight:bold; padding-bottom: 10px;' class=' '>部活
                            </div>
                            <div class='cent' style='font-size:26px;'>
                                <?= $stmt['societies']; ?>
                            </div>
                        </div>
                        <div class='box box-none'>

                        </div>
                    </div>
                </div>
                <div class="pre-like">
                    <div class='int-text int-title'><?= $stmt['text']; ?></div>
                </div>
                <!--  回上一頁 ,左右可選跳至上下學生(id) -->
                <div class='int-items'>
                    <div>
                        <?php if (isset($prevId['id'])): ?>
                            <a href="?do=<?= $do; ?>&id=<?= $prevId['id']; ?>#introduction-title">
                                <img src="./upload/<?= $prevId['logo'] ?>" class='img-fluid int-logo int-footer-logo int-radius'>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div style='display:flex;align-items: center;'>
                        <a href="?do=<?= $do ?>&p=<?= $now ?>#introduction-title" class='int-back'>
                            <img class='img-fluid' src='./icon/introduction.png'>
                        </a>
                    </div>
                    <div>
                        <?php if (isset($nextId['id'])): ?>
                            <a href="?do=<?= $do ?>&id=<?= $nextId['id']; ?>#introduction-title">
                                <img src="./upload/<?= $nextId['logo']; ?>" class='img-fluid int-logo int-footer-logo int-radius'>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <!--   回上一頁 ,左右可選跳至上下學生(id) end -->
            <?php else:
                echo "<p>找不到此頁面。</p>";
            ?>
            <?php endif; ?>
        <?php endif; ?>
        <!--event-banner-box  -->
        <div class="event-banner-box p-4">
            <div class="inner ">
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