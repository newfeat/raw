<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Одна категория</title>
    <link rel="stylesheet" type="text/css" href="/../css/style.css">
</head>
<body>
<header class="container">
</header>
<article class="container">
    <div class="block1">
        <div class="container1">
            <h1>Одна категория</h1>
        </div>
    </div>
    <div class="block1">
        <div class="container1">
            <table>
                <tr>
                    <td>
                        <h3><?php echo $this->category->title; ?></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><?php echo $this->category->description; ?></p>
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