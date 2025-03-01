<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Полученные данные</h1>
    <?php
        if (isset($_GET['number1'])&&isset($_GET['number2'])) {
            $number1 = intval($_GET ['number1']);
            $number2 = intval($_GET ['number2']);
            $sum = $number1 + $number2;
            echo "<p>Сумма чисел: $sum</p>";
        } else {
            echo "<p>Числа не получены.</p>";
        }
    ?>
</body>
</html>