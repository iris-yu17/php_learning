<?php

require __DIR__ . '/../8-25/09.connect_database/01.connect.php';
//$member_id = 3;

$row = $pdo->query("SELECT * FROM members WHERE id=3")->fetch();


?>
<?php require __DIR__ . '/../8-25/08.devide_file/__html_head.php'; ?>
<?php include __DIR__ . '/../8-25/08.devide_file/__navbar.php'; ?>
<div class="container">
    <form action="" method="post">
        <input type="hidden" name="id" value="3">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" value="<?= $row['email'] ?>" disabled>
        </div>
        <div class="form-group">
            <label for="nickname">nickname</label>
            <input type="text" class="form-control" id="nickname" value="<?= $row['nickname'] ?>">
        </div>
        <div class="form-group">
            <label for="mobile">mobile</label>
            <input type="text" class="form-control" id="mobile" value="<?= $row['mobile'] ?>">
        </div>

        <button type="button" class="btn btn-warning" onclick="file_input.click()">上傳圖一</button>
        <input type="hidden" id="field1" name="field1">
        <img src="" alt="" id="myimg" width="250px">
        <br>


    </form>

    <input type="file" id="file_input" style="display: none">

</div>
<?php include __DIR__ . '/../8-25/08.devide_file/__scripts.php'; ?>
<script>
    const file_input = document.querySelector('#file_input');
    const field1 = document.querySelector('#field1');

    file_input.addEventListener('change', function(event) {
        console.log(file_input.files)
        const fd = new FormData();
        fd.append('myfile', file_input.files[0]);

        fetch('upload-single-api.php', {
                method: 'POST',
                body: fd
            })
            .then(r => r.json())
            .then(obj => {
                field1.value = obj.filename;
                document.querySelector('#myimg').src = './../uploads/' + obj.filename;
            });
    });
</script>

<?php include __DIR__ . '/../8-25/08.devide_file/__html_foot.php'; ?>