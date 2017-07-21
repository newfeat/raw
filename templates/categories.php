<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Категории</title>
    <link rel="stylesheet" type="text/css" href="/../css/style.css">
</head>
<body>
<header class="container">
</header>
<article class="container">
    <div class="block1">
        <div class="container1">
            <h1>Все категории</h1>
        </div>
    </div>
    <div class="block1">
        <div class="container1">
            <?php
            foreach ($this->categories as $category): ?>
                <section>
                    <h2>
                        <a class="link"
                           href="/Categories/One/?id=<?php echo $category->id; ?>"><?php echo $category->title; ?><br></a>
                    </h2>
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