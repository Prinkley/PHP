<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

        .info__wrapper {
            display: flex;
            justify-content: center;
            height: 200px;
        }

        .info__greeting {
            font-family: 'Segoe UI', 'Open Sans', sans-serif;
            font-size: 3rem;
        }

        .footer__wrapper {
            border-top: 1px solid grey;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer__text{
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
            <h1 class="header__title"> Домашняя работа: Hello, World! </h1>
        </div>
    </header>

    <main>
        <div class="info__wrapper">
            <h2 class="info__greeting">
                <?php
                $time = date("H") + 2;
                if ($time >= 4 and $time < 12) {
                    echo "Доброе утро!";
                } elseif ($time >= 12 and $time < 17) {
                    echo "Добрый день!";
                } elseif ($time >= 17 and $time < 23) {
                    echo "Добрый вечер!";
                } elseif ($time >= 23 and $time < 4) {
                    echo "Доброй ночи!";
                }
                ?>
            </h2>
        </div>
    </main>

    <footer>
        <div class="footer__wrapper">
            <p class="footer__text">Маринина Анастасия Павловна 241-3210</p>
            <a class="footer__text" href="https://github.com/Prinkley/PHP.git">Ссылка на репозиторий</a>
        </div>
    </footer>

</body>
</html>