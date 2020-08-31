<?php
if (!isset($page_name)) $page_name = '';
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= $page_name == 'data-list' ? 'active' : '' ?>">
                    <!-- $page_name覆蓋 -->
                    <!-- <li class="nav-item active">
                <li class="nav-item"> -->
                    <a class="nav-link" href="<?= WEB_ROOT ?>/8-25/09.connect_database/03.data-list-3-js-remove.php">列表</a>
                </li>
                <li class="nav-item <?= $page_name == 'data-insert' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= WEB_ROOT ?>/8-25/09.connect_database/05.data-insert.php">新增</a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item <?= $page_name == 'login' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= WEB_ROOT ?>/../php_learning/8-31/01.login.php">登入</a>
                </li>
            </ul>

        </div>
    </div>
</nav>


<style>
    .navbar .nav-item.active {
        background-color: #7abaff;
        border-radius: 10px;
    }
</style>