<?php
require __DIR__ . '/01.connect.php';

// sid不用加
$sql = "INSERT INTO `contact_list` 
(`name`, `email`, `mobile`, `birthdate`, `address`, `created_at`)
 VALUES (?, ?, ?, ?, ?, NOW())";  //created_at帶NOW()

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    $_POST['birthdate'],
    $_POST['address'],
]);


echo $stmt->rowCount();  //輸入筆數

echo 'ok';
