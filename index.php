<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Мгок онлайн, расписание занятий ГБПОУ МГОК">
        <link rel="shortcut icon" href="icons/icon.svg" />
        <link rel="stylesheet" type="text/css" href="css/author.css">
        <link rel="icon" href="icons\icons8-словарь-48-_1.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <title>Добро пожаловать</title>
    </head>
    <body>

        <div class="container">
            <form class="formsing" action="#' .$crnt.'" method="POST">
                <h2 class="reg">Авторизация</h2>
                <div class="inputtt">
                    <p>Логин:</p>
                    <input class="textboxindex" type="text" maxlength="25" name="username" placeholder="Введите вашу почту" requred>
                    <p>Пароль:</p>
                    <input class="textboxindex" type="password" maxlength="15" name="password" placeholder="Введите ваш пароль" requred>
                </div>
                <div class="outline-btn">
                    <button class="buttonreg" onclick="redirect();" type="submit">Войти в систему</button>
                </div>
            </form>
        </div>
    </body>
</html>