<?php include 'db.php';
header('Content-Type: application/json');

$age = $_GET['age'] ?? null;
$city = $_GET['city'] ?? null;

$sql = "SELECT * FROM users WHERE 1=1";
$params = [];

if ($age) {
    $sql .= " AND age = ?";
    $params[] = $age;
}
if ($city) {
    $sql .= " AND city = ?";
    $params[] = $city;
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
echo json_encode($stmt->fetchAll());
?>