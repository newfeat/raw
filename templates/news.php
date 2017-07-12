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
            <h1>Все новости</h1>
        </div>
    </div>
    <div class="block1">
        <div class="container1">
            <?php
            foreach ($this->news as $article): ?>
                <section>
                    <h2>
                        <a class="link"
                           href="/News/One/?id=<?php echo $article->id; ?>"><?php echo $article->title; ?><br></a>
                    </h2>
                    <article>Описание: <?php echo $article->lead; ?></article>
                    <?php if (!empty($article->author_id)): ?>
                        <p>Автор: <?php echo $article->author->name; ?></p>
                    <?php endif ?>
                    <hr>
                </section>
            <?php endforeach; ?>
        </div>
    </div>
</article>
<footer class="container">
</footer>
</body>
</html>