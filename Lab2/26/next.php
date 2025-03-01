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
        if (isset($_GET['number'])) {
            $number = intval($_GET['number']);
            echo "<p>Вы ввели число: " . $number . "</p>";
        } else {
            echo "<p>Число не передано.</p>";
        }
    ?>
</body>
</html>