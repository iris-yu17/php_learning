<?php

//1.可直接放array在php
/*
$categories = array(
    array('sid' => '1','name' => '程式設計','parent_sid' => '0'),
    array('sid' => '2','name' => '繪圖軟體','parent_sid' => '0'),
    array('sid' => '3','name' => '網際網路應用','parent_sid' => '0'),
    array('sid' => '4','name' => 'PHP','parent_sid' => '1'),
    array('sid' => '5','name' => 'JavaScript','parent_sid' => '1'),
    array('sid' => '7','name' => 'PS','parent_sid' => '2'),
    array('sid' => '8','name' => 'Chrome','parent_sid' => '3'),
    array('sid' => '9','name' => '騙錢的','parent_sid' => '3'),
    array('sid' => '10','name' => 'C++','parent_sid' => '1'),
    array('sid' => '16','name' => '椅拉','parent_sid' => '2')
);
*/

//2.用資料庫的資料
require __DIR__ . '/../8-25/09.connect_database/01.connect.php';

// $pdo: 連到資料庫
// query: 選擇資料
$rows = $pdo->query("SELECT * FROM `categories`")->fetchAll();

$cates = [];

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php require __DIR__ . '/../8-25/08.devide_file/__html_head.php'; ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php foreach ($cates as $v) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="?cate=<?= $v['sid'] ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $v['name'] ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach ($v['children'] as $v2) : ?>
                                    <!-- href=?cate.....  網址可看到sid號碼 -->
                                    <a class="dropdown-item" href="?cate=<?= $v2['sid'] ?>"><?= $v2['name'] ?></a>
                                <?php endforeach; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </nav>


    <script>
        //2.用資料庫的array  (若直接用php的array，$rows改$categories)
        //用php生json格式
        const rows = <?= json_encode($rows, JSON_UNESCAPED_UNICODE) ?>;
    </script>

</body>

</html>