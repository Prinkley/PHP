<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>

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

        .form__wrapper {
            max-width: 75%;
            margin: 30px auto;
        }

        .form {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form__label {
            font-family: 'Segoe UI', 'Open Sans', sans-serif;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .form__input {
            margin: 10px 0;
            padding: 5px 0;
            font-size: 1.8rem;
        }

        .form__check {
            font-size: 1.8rem;
            font-family: 'Segoe UI', 'Open Sans', sans-serif;
        }

        .form__checkbox{
            display:flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
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
            <a href="next.php" class="header__link">2 страница</a>
        </div>
    </header>

    <main>
        <div class="form__wrapper">
            <form action="https://httpbin.org/post" method="post" class="form">
                <input type="text" placeholder="Имя пользователя" class="form__input" required>
                <input type="email" placeholder="E-mail пользователя" class="form__input" required>
                <label class="form__label" for="type">Тип обращения</label>
                <select class="form__input" name="type" id="type">
                    <option value="жалоба">Жалоба</option>
                    <option value="предложение">Предложение</option>
                    <option value="благодарность">Благодарность</option>
                </select>
                <textarea name="message" id="message" class="form__input" placeholder="Текст обращения"></textarea>
                <label class="form__label">Вариант обращения</label>
                <div class="form__checkbox">
                    <label class="form__check" for="response_sms">СМС</label>
                    <input type="checkbox" id="response_sms" name="response[]" value="смс">
                </div>
                <div class="form__checkbox">
                    <label class="form__check" for="response_email">E-mail</label>
                    <input type="checkbox" placeholder="E-mail" id="response_email" name="response[]" value="e-mail">
                </div>
            </form>
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