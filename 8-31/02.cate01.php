<?php
require __DIR__ . '/../8-25/09.connect_database/01.connect.php';

// $pdo: 連到資料庫
// query: 選擇資料
$rows = $pdo->query("SELECT * FROM `categories`")->fetchAll();

$cates = [];

// 第一層
// $k: 第幾個object
// $v: object {"sid": "1", "name": "程式設計","parent_sid": "0" },

foreach ($rows as $k => $v) {
    if ($v['parent_sid'] == '0') {
        // push
        $cates[] = $v;
    }
}

// 第二層
foreach ($cates as $k => $v) {
    foreach ($rows as $k2 => $v2) {
        if ($v['sid'] == $v2['parent_sid']) {
            $cates[$k]['children'][] = $v2;
        }
    }
}


echo json_encode($rows, JSON_UNESCAPED_UNICODE);
