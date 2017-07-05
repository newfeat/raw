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
            foreach ($news as $article) { ?>
                <div>
                    <ul style="font-size: 13px; line-height: 1.7;">
                        <li>
                            <a class="link" href="/article.php?id=<?php echo $article->id; ?>"><?php echo $article->title; ?><br><?php echo $article->lead; ?></a>
                        </li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</article>
<footer class="container">
</footer>
</body>
</html>