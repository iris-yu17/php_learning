<?php
$a = 13;
$b = 27;

// var_dump 函式的功能是用來將變數資料印出來
// php的邏輯運算子一律得到布林值
echo var_dump($a && $b) . '<br>';
echo var_dump($a and $b) . '<br>';

$c = $a && $b;
echo var_dump($c) . '<br>';
// =優先於英文字，$c = $a先做
$c = $a and $b;
echo var_dump($c) . '<br>';