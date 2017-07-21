<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Одна новость</title>
    <link rel="stylesheet" type="text/css" href="/../css/style.css">
</head>
<body>
<header class="container">
</header>
<article class="container">
    <div class="block1">
        <div class="container1">
            <h1>Одна новость</h1>
        </div>
    </div>
    <div class="block1">
        <div class="container1">
            <table>
                <tr>
                    <td>
                        <h3><?php echo $this->article->title; ?></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><?php echo $this->article->lead; ?></p>
                        <p><?php echo $this->article->description; ?></p>
                        <?php if (!empty($this->article->author_id)): ?>
                            <hr>
                            <p>Автор: <?php echo $this->article->author->name; ?></p>
                        <?php endif ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</article>
<footer class="container">
</footer>
</body>
</html>