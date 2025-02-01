    <style>
.int-img {
    width: 720px;
    height: 960px;
}

.int-text {
    font-size: 18px;
}
    </style>

    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=db003;charset=utf8", "root", "");

    // 取得所有頁面的 id 和標題
    $sql = "SELECT id, logo , name FROM introductions";
    $stmt = $pdo->query($sql);
    $pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <style>
    </style>
    <div class="col-8 inner">
        <h2 class="title">學生介紹

        </h2>
        <hr>
        <div class="p-4 int">
            <table class="table">
                <tbody>
                    <?php if (!isset($_GET['id'])): // 如果沒有選擇頁面，則顯示主頁連結 ?>
                    <tr>
                        <th width="10%">頭像</th>
                        <th width="30%">學生姓名</th>
                    </tr>
                    <?php foreach ($pages as $page): ?>

                    <tr>
                        <td width="10%">
                            <a href="?do=<?=$do;?>&id=<?= $page['id'] ?>">
                                <img src="./upload/<?=$page['logo'];?>" class="img-fluid mt-4 "
                                    style="width:150px;height:150px;">
                            </a>
                        </td>
                        <td width="30%" class="int-name">
                            <?=$page['name'];?>
                        </td>
                    </tr>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
        </table>
        </tbody>



        <?php
        // 讀取選取的頁面內容
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM introductions WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $id]);
            $page = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($page) {
                echo "<img src='./upload/{$page['img']}' class='img-fluid mt-4 int-img'><hr>";
            echo "<pre><div class='int-text'>{$page['text']}</div></pre>";
            } else {
            echo "<p>找不到此頁面。</p>";
            }
            }
?>

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