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


//echo json_encode($cates, JSON_UNESCAPED_UNICODE);
?>
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

<div class="container">
    <h2>Hello~</h2>

</div>
<?php include __DIR__ . '/../8-25/08.devide_file/__scripts.php'; ?>
<?php include __DIR__ . '/../8-25/08.devide_file/__html_foot.php'; ?>