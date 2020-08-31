<?php

session_start();

unset($_SESSION['admin']);

# session_destroy(); // 清掉所有 session 資料

header('Location:/../../8-27/01.data-list3.php'); // redirect // 轉向