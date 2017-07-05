<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Создание или редактирование новости</title>
    <link rel="stylesheet" type="text/css" href="/../css/style.css">
</head>
<body>
<header class="container">
</header>
<article class="container">
    <div class="block1">
        <div class="container1">
            <h1>Создание или редактирование новости</h1>
        </div>
    </div>
    <div class="block1">
        <div class="container1">
            <form action="/admin/actions/edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $article->id; ?>">
                <input type="text" name="title" placeholder="заголовок" value="<?php echo $article->title; ?>">
                <br>
                <br>
                <input type="text" name="lead" placeholder="подзаголовок" value="<?php echo $article->lead; ?>">
                <br>
                <br>
                <input type="text" name="desc" placeholder="текст" value="<?php echo $article->desc; ?>">
                <br>
                <br>
                <input type="submit" value="Сохранить">
            </form>
        </div>
    </div>
</article>
<footer class="container">
</footer>
</body>
</html>