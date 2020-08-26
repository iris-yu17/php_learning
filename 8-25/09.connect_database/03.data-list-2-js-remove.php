<?php
$page_title = '首頁';
require __DIR__ . '/01.connect.php';

$stmt = $pdo->query("SELECT * FROM `contact_list` LIMIT 5");
$rows = $stmt->fetchAll();
?>

<?php require __DIR__ . '/../08.devide_file/__html_head.php'; ?>
<style>
    .my-trash-i {
        color: cornflowerblue;
        cursor: pointer;
    }
</style>

<?php include __DIR__ . '/../08.devide_file/__navbar.php'; ?>
<div class="container">

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
                    <td><i class="fas fa-trash-alt my-trash-i"></i></td>
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

<script>
    // 寫法一
    const table = document.querySelector('table');

    table.addEventListener('click', (event) => {
        const t = event.target;
        console.log(t.classList.contains('my-trash-i'));

        if (t.classList.contains('my-trash-i')) {
            t.closest('tr').remove();
        }
    })

    // 寫法二
    /*
    const table = document.querySelector('table');

    table.addEventListener('click', (event) => {
        const t = event.target;
        //console.log(t.classList);

        const ar = [...t.classList];

        // -1 表示找不到
        console.log(ar.indexOf('my-trash-i'));

        // 如果有找到
        if (ar.indexOf('my-trash-i') !== -1) {
            t.closest('tr').remove();
        }
    })
    */
</script>

<?php include __DIR__ . '/../08.devide_file//__html_foot.php'; ?>