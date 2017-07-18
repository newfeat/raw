<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="/../css/style.css">
</head>
<body>
<header class="container">
</header>
<article class="container">
    <div class="block1">
        <div class="container1">
            <h1>Регистрация пользователя</h1>
        </div>
    </div>
    <div class="block1">
        <div class="container1">
            <form action="/Admin/Save" method="post">
                <input type="text" name="name" placeholder="имя">
                <br>
                <br>
                <input type="email" name="email" placeholder="email">
                <br>
                <br>
                <input type="password" name="password" placeholder="пароль">
                <br>
                <br>
                <input type="password" name="confirm" placeholder="подтверждение">
                <br>
                <br>
                <input type="submit" value="Зарегистрироваться">
            </form>
        </div>
    </div>
</article>
<footer class="container">
</footer>
</body>
</html>