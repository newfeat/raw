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
            <form action="/Admin/Save" method="post">
                <input type="hidden" name="id" value="<?php echo $this->article->id; ?>">
                <input type="text" name="title" placeholder="заголовок" value="<?php echo $this->article->title; ?>">
                <br>
                <br>
                <input type="text" name="lead" placeholder="подзаголовок" value="<?php echo $this->article->lead; ?>">
                <br>
                <br>
                <input type="text" name="description" placeholder="текст" value="<?php echo $this->article->description; ?>">
                <br>
                <br>
                <select name="author_id">
                    <option value=""></option>
                    <?php foreach ($this->authors as $author): ?>

                        <option value="<?php echo $author->id; ?>" <?php if (!empty($this->article->author_id) && $author->id == $this->article->author_id){?> selected <?php } ?>>
                            <?php echo $author->name; ?>
                        </option>

                    <?php endforeach; ?>
                </select>
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