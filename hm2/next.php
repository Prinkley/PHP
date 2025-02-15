<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат работы get_headers</title>

    <style>
        body {
            margin: 0;
        }

        :root {
            font-size: 62.5%;
        }

        .header__wrapper {
            background-color: dimgray;
            display: flex;
            padding: 20px;
            height: 45px;
            align-items: center;
            justify-content: flex-start;
        }

        .header__logo {
            width: 80%
        }

        .header__title {
            font-size: 2.8rem;
            color: white;
            font-family: system-ui, 'Segoe UI', sans-serif;
            margin: 0 auto;
        }

        .header__link {
            font-size: 1.8rem;
            color: white;
            font-family: system-ui, 'Segoe UI', sans-serif;
        }

        main {
            min-height: 200px;
        }

        .footer__wrapper {
            border-top: 1px solid grey;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer__text {
            font-family: system-ui, sans-serif;
            font-size: 2rem;
            color: dimgray;
        }
    </style>
</head>

<body>
    <header>
        <div class="header__wrapper">
            <a class="header__link" href="https://mospolytech.ru/?ysclid=m73gij3vi2856702515"><img class="header__logo"
                    src="../media/logo.svg" alt="Московский политех"></a>
            <h1 class="header__title"> Домашняя работа: Feedback Form </h1>
            <a href="index.php" class="header__link">1 страница</a>
        </div>
    </header>

    <main>
        <h1>Результат работы функции get_headers</h1>
        <textarea rows="20" cols="100">
<?php
$url = "https://httpbin.org";
$headers = get_headers($url);
foreach ($headers as $header) {
    echo $header . "\n";
}
?>
    </textarea>
    </main>

    <footer>
        <div class="footer__wrapper">
            <p class="footer__text">Маринина Анастасия Павловна 241-3210</p>
            <a class="footer__text" href="https://github.com/Prinkley/PHP.git">Ссылка на репозиторий</a>
        </div>
    </footer>

</body>

</html>