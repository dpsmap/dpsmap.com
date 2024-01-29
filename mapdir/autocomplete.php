<?php
$host = 'localhost';
$username = 'business_list';
$password = 'tsNp3SDMtw4ktTmZ';
$database = 'business_list';

$term = $_GET['term'];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT DISTINCT POI_N_Eng FROM db_business_list WHERE POI_N_Eng LIKE :term LIMIT 100");
    $param = '%' . $term . '%';
    $stmt->bindParam(':term', $param, PDO::PARAM_STR);
    $stmt->execute();

    $suggestions = $stmt->fetchAll(PDO::FETCH_COLUMN);

    header('Content-Type: application/json');
    echo json_encode($suggestions);
} catch (PDOException $e) {
    header('HTTP/1.1 500 Internal Server Error', true, 500);
    echo "Database error: " . $e->getMessage();
}
?>
