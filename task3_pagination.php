<?php include 'db.php';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 5;
$offset = ($page - 1) * $limit;

$stmt = $pdo->prepare("SELECT * FROM products LIMIT ? OFFSET ?");
$stmt->bindValue(1, $limit, PDO::PARAM_INT);
$stmt->bindValue(2, $offset, PDO::PARAM_INT);
$stmt->execute();

$products = $stmt->fetchAll();
foreach ($products as $p) {
    echo "{$p['name']} - \${$p['price']}<br>";
}

$next = $page + 1;
$prev = $page - 1;
echo "<a href='?page=$prev'>Prev</a> | <a href='?page=$next'>Next</a>";
?>