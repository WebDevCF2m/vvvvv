<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <h1><?=$title?></h1>
    <nav>
        <?php
    include "inc/menuIncView.php";
        ?>
    </nav>
<div id="content">
    <p>A propos de moi</p>
    <p><img src="img/moi.png" alt="moi"></p>
</div>
    <footer>
    <?php
    include "inc/footerIncView.php";
        ?>
    </footer>
</body>
</html>