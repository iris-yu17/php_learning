<?php
require __DIR__ . '/../8-25/09.connect_database/01.connect.php';

// $pdo: 連到資料庫
// query: 選擇資料
$rows = $pdo->query("SELECT * FROM `categories`")->fetchAll();

echo json_encode($rows, JSON_UNESCAPED_UNICODE);
