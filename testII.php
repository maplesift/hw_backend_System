<?php
    $pdo = new PDO("mysql:host=localhost;dbname=db003;charset=utf8", "root", "");

    // 取得所有頁面的 id 和標題
    $sql = "SELECT id, logo  FROM introductions";
    $stmt = $pdo->query($sql);
    $pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

<?php if (!isset($_GET['id'])): // 如果沒有選擇頁面，則顯示主頁連結 ?>
<h1>選擇一個頁面：</h1>
<ul>
    <?php foreach ($pages as $page): ?>
    <li>
        <a href="testII.php?id=<?= $page['id'] ?>">
            <img src="./upload/<?=$page['logo'];?>" class="img-fluid mt-4 " style="width:150px;height:150px;">
        </a>
    </li>
    <?php endforeach; ?>
</ul>
<hr>
<?php endif; ?>


<?php
    // 讀取選取的頁面內容
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM introductions WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        $page = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($page) {
            echo "<h1>{$page['id']}</h1>";
            echo "<p>{$page['text']}</p>";
        } else {
            echo "<p>找不到此頁面。</p>";
        }
    }
    ?>