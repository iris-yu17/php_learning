<?php
require __DIR__ . '/../8-25/09.connect_database/01.connect.php';

if (!empty($_FILES) && !empty($_FILES['myfile']['name'])) {
    // header('Content-Type: text/plain');
    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';
    move_uploaded_file(
        $_FILES['myfile']['tmp_name'],
        __DIR__ . '/../uploads/' . $_FILES['myfile']['name']
    );

    echo "<img src='./../uploads/{$_FILES['myfile']['name']}'>";
    exit;
}

?>
<?php require __DIR__ . '/../8-25/08.devide_file/__html_head.php'; ?>
<?php include __DIR__ . '/../8-25/08.devide_file/__navbar.php'; ?>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="myfile" name="myfile" accept="image/*">
        </div>
        <input class="btn btn-primary" type="submit" value="上傳">
    </form>

</div>
<?php include __DIR__ . '/../8-25/08.devide_file/__scripts.php'; ?>
<?php include __DIR__ . '/../8-25/08.devide_file/__html_foot.php'; ?>