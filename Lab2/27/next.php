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
        if (isset($_GET['number'])&&$_GET['number']==1) {
            echo "<p>Привет</p>";
        } else {
            echo "<p>Пока</p>";
        }
    ?>
</body>
</html>