<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td {
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body>
    <table>
        <!-- 16進位 -->
        <?php for ($i = 0; $i <= 255; $i += 17) : ?>
            <tr>
                <?php for ($j = 0; $j <= 255; $j += 17) : ?>

                    <!-- WRONG -->
                    <!-- 原本#000000會少個零 -->
                    <!-- <td style="background-color: #<?= sprintf("%X", $i) ?><?= sprintf("%X", $j) ?>00"></td> -->

                    <!-- RIGHT -->
                    <!-- %X 為16進位 -->
                    <td style="background-color: #<?= sprintf("%'.02X", $i) ?><?= sprintf("%'.02X", $j) ?>00"></td>

                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>

</body>

</html>