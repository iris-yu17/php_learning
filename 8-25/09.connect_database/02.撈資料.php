<?php
require __DIR__ . '/01.connect.php';

//執行並查詢，查詢後只回傳一個查詢結果的物件，必須使用fetc、fetcAll...等方式取得資料
// ()內是mysql語法
// LIMIT 5: 撈5筆
$stmt = $pdo->query("SELECT * FROM `contact_list` LIMIT 5");

// 用fetcAll取得所有5筆資料
// 轉為json格式
echo json_encode($stmt->fetchAll(), JSON_UNESCAPED_UNICODE);
