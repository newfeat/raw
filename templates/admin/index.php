<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
    <link rel="stylesheet" type="text/css" href="/../css/style.css">
</head>
<body>
<header class="container">
</header>
<article class="container">
    <div class="block1">
        <div class="container1">
            <h1>Админ-панель новостей</h1>
        </div>
    </div>
    <div class="block1">
        <div class="container1">
            <?php
            foreach ($this->news as $article): ?>
                <div>
                    <ul style="font-size: 13px; line-height: 1.7;">
                        <li>
                            <p><?php echo $article->title; ?></p>
                            <p><?php echo $article->lead; ?></p>
                            <a class="link" href="/Admin/Edit/?id=<?php echo $article->id; ?>">Редактировать</a>
                            <a class="link" href="/Admin/Delete/?id=<?php echo $article->id; ?>">Удалить</a>
                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <br>
    <div class="block1">
        <div class="container1">
            <a class="link" href="/Admin/Edit">Добавить еще одну новость</a>
        </div>
    </div>
</article>
<footer class="container">
</footer>
</body>
</html>