<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$datas['titre']?> | <?=$titrepage?></title>
</head>
<body>
    <nav>
        <a href="./">Accueil</a>
        <a href="./?p=php">PHP</a>
        <a href="./?p=sql">SQL</a>
        <a href="./?p=javascript">javascript</a>
    </nav>
    <h1><?=$datas['titre']?> | <?=$titrepage?></h1>
    <p><?=nl2br($text)?></p>
    <?php var_dump($_GET) ?>
</body>
</html>