<?php
require __DIR__ . '/01.connect.php';

// referer: 要知道從哪裡來
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '03.data-list-3-js-remove.php';

if (empty($_GET['sid'])) {
    header('Location: ' . $referer);
    exit;
}
$sid = intval($_GET['sid']) ?? 0;

$pdo->query("DELETE FROM contact_list WHERE sid=$sid ");
header('Location: ' . $referer);
