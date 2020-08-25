<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
</head>
<body>
    <?php

    // php常數是全域的
    define('MY_CONST', 123);
    echo MY_CONST;
    echo '</br>';


    // 變數用$開頭
    //empty()函數用來判斷"值"是不是空的，如果沒有就回傳(true)，如果有"值"就不回傳(false)
    $a = 456;
    echo $a . '</br>';
    echo $b . '</br>';
    echo !empty($b) . '</br>';
    echo empty($b) . '</br>';

    echo $a . '</br>';

    // ""會判斷變數  ''不會
    // 用\跳脫字元
    echo '$a<br>';
    echo "$a<br>";
    echo "\$a<br>";
    echo "\n\"<br>";


    // 有時輸出變數內容情況會⽐較複雜，此時可以使⽤⼤括號
    $name = "Victor";
    echo "Hello, $name<br>";
    echo "Hello, $name456<br>";
    echo "Hello, {$name}456<br>";
    echo "<br>";

    // php加號不用來連接字串
    echo "123" + "10";
    echo "<br>";




    ?>
</body>

</html>