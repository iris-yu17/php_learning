<?php

session_start();

unset($_SESSION['user']);

# session_destroy(); // 清掉所有 session 資料

header('Location: 05.login.php');

// redirect // 轉向