<?php
$page_title = '資料列表';
$page_name = 'data-list';
require __DIR__ . '/01.connect.php';


// 看有幾筆資料
/*
$t_sql = "SELECT COUNT(1) FROM `contact_list`";
echo $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
die('~~~'); //或exit; // 結束程式

$stmt = $pdo->query("SELECT * FROM `contact_list` LIMIT 5");
$rows = $stmt->fetchAll();
?>
*/



// 做分頁
$perPage = 5; // 每頁有幾筆資料
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$t_sql = "SELECT COUNT(1) FROM `contact_list`";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows / $perPage);


$rows = [];
if ($totalRows > 0) {
    if ($page < 1) $page = 1;
    if ($page > $totalPages) $page = $totalPages;

    $sql = sprintf("SELECT * FROM `contact_list` LIMIT %s, %s", ($page - 1) * $perPage, $perPage);
    $stmt = $pdo->query($sql);
    $rows = $stmt->fetchAll();
}
?>



<?php require __DIR__ . '/../08.devide_file/__html_head.php'; ?>
<?php include __DIR__ . '/../08.devide_file/__navbar.php'; ?>
<div class="container">

    <!-- 加分頁按鈕 -->
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page - 1 ?>">
                            <i class="fas fa-arrow-circle-left"></i>
                        </a>
                    </li>
                    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                        <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                    <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                        <a class="page-link" href="?page=<?= $page + 1 ?>">
                            <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>


    <!-- `sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at` -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><i class="fas fa-trash-alt"></i></th>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">mobile</th>
                <th scope="col">birthdate</th>
                <th scope="col">address</th>
                <th scope="col">created_at</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $r) : ?>
                <tr>
                    <td><a href="javascript:"><i class="fas fa-trash-alt"></i></a></td>
                    <td><?= $r['sid'] ?></td>
                    <td><?= $r['name'] ?></td>
                    <td><?= $r['email'] ?></td>
                    <td><?= $r['mobile'] ?></td>
                    <td><?= $r['birthdate'] ?></td>
                    <td><?= $r['address'] ?></td>
                    <td><?= $r['created_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php include __DIR__ . '/../08.devide_file//__scripts.php'; ?>
<?php include __DIR__ . '/../08.devide_file//__html_foot.php'; ?>