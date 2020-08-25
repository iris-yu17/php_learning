<?php

$accounts = [
    'shin' => [
        'pw' => '123456',
        'nickname' => '小新'
    ],
    'der' => [
        'pw' => '1qaz2wsx',
        'nickname' => '小明'
    ],
];

// json_encode可以把PHP的陣例轉換成json format
// json_decode是將json轉成PHP Array或是Object
echo json_encode($accounts, JSON_UNESCAPED_UNICODE);
