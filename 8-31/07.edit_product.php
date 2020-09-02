<?php

require __DIR__ . '/../8-25/09.connect_database/01.connect.php';
if (!empty($_POST['id'])) {
    $sql = "UPDATE `members` SET `mobile`=?, `hash`=?, `nickname`=? WHERE `id`=?";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $_POST['mobile'],
        $_POST['avatar'],
        $_POST['nickname'],
        $_POST['id'],
    ]);

    if ($stmt->rowCount()) {
        $modified = true;
    }
}

$row = $pdo->query("SELECT * FROM products WHERE sid=2")->fetch();

$c_sql = "SELECT * FROM categories WHERE parent_sid=0 ORDER BY sid DESC";

$cates = $pdo->query($c_sql)->fetchAll();
?>
<?php require __DIR__ . '/../8-25/08.devide_file/__html_head.php'; ?>
<?php include __DIR__ . '/../8-25/08.devide_file/__navbar.php'; ?>
<div class="container">
    <?php if (isset($modified)) : ?>
        <div class="alert alert-success" role="alert">
            修改成功
        </div>
    <?php endif ?>
    <form action="" method="post">
        <input type="hidden" name="sid" value="2">
        <div class="form-group">
            <label for="bookname">bookname</label>
            <input type="text" class="form-control" id="bookname" name="bookname" value="<?= $row['bookname'] ?>">
        </div>

        <div class="form-group">
            <label for="category_sid">分類</label>
            <select class="form-control" id="category_sid" name="category_sid">
                <?php foreach ($cates as $c) : ?>
                    <option value="<?= $c['sid'] ?>"><?= $c['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>


        <!--            <input type="text" class="form-control" id="category_sid" name="category_sid" value="-->
        <?//= $row['category_sid'] ?>
        <!--">-->

        <div class="form-group">
            <label for="price">price</label>
            <input type="text" class="form-control" id="price" name="price" value="<?= $row['price'] ?>">
        </div>


        <div class="d-flex justify-content-end">
            <input type="submit" value="修改" class="btn btn-primary">
        </div>

    </form>

    <input type="file" id="file_input" style="display: none">

</div>
<?php include __DIR__ . '/../8-25/08.devide_file/__scripts.php'; ?>
<script>
    // const file_input = document.querySelector('#file_input');
    // const avatar = document.querySelector('#avatar');
</script>

<?php include __DIR__ . '/../8-25/08.devide_file/__html_foot.php'; ?>