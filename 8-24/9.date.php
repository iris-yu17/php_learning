<div>
    <?php
    //date_default_timezone_set('Asia/Tokyo');

    $now = date("Y-m-d H:i:s");

    // 30天後
    $after30 = date("Y-m-d", time() + 30 * 24 * 60 * 60);

    // strtotime 字串轉為timestamp
    $date1 = date("Y-m-d H:i:s", strtotime('2020-07-21'));

    echo "now: $now<br>";
    echo "after30: $after30<br>";
    echo "date1: $date1<br>";



    ?>
</div>