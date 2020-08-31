<?php
$page_title = '登入';
$page_name = 'login';
require __DIR__ . '/../8-25/09.connect_database/01.connect.php';

?>
<?php include __DIR__ . '/../8-25/08.devide_file/__html_head.php'; ?>
<?php include __DIR__ . '/../8-25/08.devide_file/__navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <form method="post" name="form1" onsubmit="checkForm(); return false;">
                <div class="form-group">
                    <label for="account">Account</label>
                    <input type="text" class="form-control" id="account" name="account">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php include __DIR__ . '/../8-25/08.devide_file/__scripts.php'; ?>
<script>
    function checkForm() {



    }
</script>
<?php include __DIR__ . '/../8-25/08.devide_file/__html_foot.php'; ?>