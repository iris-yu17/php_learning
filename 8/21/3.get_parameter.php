<?php
//$a = $_GET['a'] ?? 0; // php7

// 原本
// 沒給a值，會顯示Notice
$a = $_GET['a'];

// 用isset，若a有值就顯示，沒有則顯示0
// $a = isset($_GET['a']) ? $_GET['a'] : 0;
echo $a;
