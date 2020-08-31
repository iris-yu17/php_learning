<?php
$page_title = '資料列表';
$page_name = 'data-list';
require __DIR__ . '/01.connect.php';




$t_sql = "SELECT COUNT(2) FROM `contact_list`";
// echo $t_sql;
echo $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
die('~~~'); //或exit; // 結束程式

// $stmt = $pdo->query("SELECT * FROM `contact_list` LIMIT 5");
// $rows = $stmt->fetchAll();
