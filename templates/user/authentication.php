<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" type="text/css" href="/../css/style.css">
</head>
<body>
<header class="container">
</header>
<article class="container">
    <div class="block1">
        <div class="container1">
            <h1>Авторизация пользователя</h1>
            <p><a href="/Users/SignUp">Зарегистрироваться</a></p>
        </div>
    </div>
    <div class="block1">
        <div class="container1">
            <form action="/Users/Login" method="post">
                <input type="email" name="email" placeholder="email">
                <br>
                <br>
                <input type="password" name="password" placeholder="пароль">
                <br>
                <br>
                <input type="submit" value="Войти">
            </form>
        </div>
    </div>
</article>
<footer class="container">
</footer>
</body>
</html>