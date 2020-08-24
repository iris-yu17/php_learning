<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <?php for ($i = 1; $i <= 9; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 9; $j++) : ?>
                    <td><?php printf("%s  %s = %s", $i, $j, $i * $j) ?></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>

    
    <!-- php多行註解方式: /* -->
    <?php /*
    <?php for($i=1; $i<=9; $i++): ?>
    <tr>
        <?php for($k=1; $k<=9; $k++): ?>
        <td><?php printf("%s * %s = %s", $i, $k, $i*$k) ?></td>
        <?php endfor ?>
    </tr>
    <?php endfor ?>
 */ ?>

</body>

</html>