<?php
$page_title = '資料列表';
$page_name = 'data-list';
require __DIR__ . '/../8-25/09.connect_database/01.connect.php';

?>
<?php include __DIR__ . '/../8-25/08.devide_file/__html_head.php'; ?>
<?php include __DIR__ . '/../8-25/08.devide_file/__navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col d-flex justify-content-end">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <!--                    <li class="page-item ">-->
                    <!--                        <a class="page-link" href="?page=">-->
                    <!--                            <i class="fas fa-arrow-circle-left"></i>-->
                    <!--                        </a>-->
                    <!--                    </li>-->

                    <!--                    <li class="page-item ">-->
                    <!--                        <a class="page-link" href="?page="></a>-->
                    <!--                    </li>-->

                    <!--                    <li class="page-item ">-->
                    <!--                        <a class="page-link" href="?page=">-->
                    <!--                            <i class="fas fa-arrow-circle-right"></i>-->
                    <!--                        </a>-->
                    <!--                    </li>-->
                </ul>
            </nav>

        </div>
    </div>


    <table class="table table-striped">
        <!-- `sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at` -->
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">姓名</th>
                <th scope="col">電郵</th>
                <th scope="col">手機</th>
                <th scope="col">生日</th>
                <th scope="col">地址</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

</div>
<?php include __DIR__ . '/../8-25/08.devide_file/__scripts.php'; ?>
<script>
    const tboday = document.querySelector('tbody');

    let pageData;

    const pageItemTpl = (o) => {

        return `<li class="page-item ${o.active}">
                        <a class="page-link" href="#">${o.page}</a>
                </li>`;
    };

    const tableRowTpl = (o) => {

        return `
        <tr>
            <td>${o.sid}</td>
            <td>${o.name}</td>
            <td>${o.email}</td>
            <td>${o.mobile}</td>
            <td>${o.birthdate}</td>
            <td>${o.address}</td>
        </tr>
        `;
    };

    // 01.data-list2-api.php 是提供資料的php
    fetch('01.data-list2-api.php')

        //接收JSON格式
        .then(r => r.json())
        .then(obj => {
            console.log(obj);
            pageData = obj;
            let str = '';
            for (let i of obj.rows) {
                str += tableRowTpl(i);
            }
            tboday.innerHTML = str;

            str = '';
            for (let i = obj.page - 3; i <= obj.page + 3; i++) {
                if (i < 1) continue;
                if (i > obj.totalPages) continue;
                const o = {
                    page: i,
                    active: ''
                }
                if (obj.page === i) {
                    o.active = 'active';
                }
                str += pageItemTpl(o);
            }
            document.querySelector('.pagination').innerHTML = str;
        });
</script>
<?php include __DIR__ . '/../8-25/08.devide_file/__html_foot.php'; ?>