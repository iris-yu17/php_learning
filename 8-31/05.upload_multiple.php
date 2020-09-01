<?php
require __DIR__ . '/../8-25/09.connect_database/01.connect.php';

if (!empty($_FILES)) {
    header('Content-Type: text/plain');
    var_dump($_FILES);
    exit;
}

?>
<?php require __DIR__ . '/../8-25/08.devide_file/__html_head.php'; ?>
<?php include __DIR__ . '/../8-25/08.devide_file/__navbar.php'; ?>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="myfile">Example file input</label>

            <!-- 上傳多個檔案，用multiple，myfile後加[] -->
            <input type="file" class="form-control-file" id="myfile" name="myfile[]" multiple accept="image/*">
        </div>
        <input class="btn btn-primary" type="submit" value="上傳">
    </form>

</div>
<?php include __DIR__ . '/../8-25/08.devide_file/__scripts.php'; ?>
<?php include __DIR__ . '/../8-25/08.devide_file/__html_foot.php'; ?>