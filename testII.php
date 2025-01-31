<?php
$pdo = new PDO("mysql:host=localhost;dbname=db003;charset=utf8", "root", "");

// 取得所有頁面的 id 和標題
$sql = "SELECT id, text FROM news";
$stmt = $pdo->query($sql);
$pages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選擇頁面</title>
</head>

<body>

    <?php if (!isset($_GET['id'])): // 如果沒有選擇頁面，則顯示主頁連結 ?>
    <h1>選擇一個頁面：</h1>
    <ul>
        <?php foreach ($pages as $page): ?>
        <li>
            <a href="testII.php?id=<?= $page['id'] ?>">
                <?= htmlspecialchars($page['id']) ?>
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
        $sql = "SELECT * FROM news WHERE id = :id";
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
    
// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//     $sql = "SELECT * FROM news WHERE id = :id";
//     // echo "$sql";
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute([':id' => $id]);
//     $page = $stmt->fetch(PDO::FETCH_ASSOC);

//     if ($page) {
//         echo "<h1>{$page['id']}</h1>";
//         echo "<p>{$page['text']}</p>";
//     } else {
//         echo "找不到此頁面";
//     }
// } 
    ?>

</body>

</html>