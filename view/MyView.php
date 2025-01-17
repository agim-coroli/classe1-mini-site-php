<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
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
=======
    <title><?php echo $datas['titre']?> | <?=$titrepage?></title>
</head>
<body>
    <nav>
        <a href="./">Accueil</a> 
        <a href="./?p=php">PHP</a> 
        <a href="./?p=sql">SQL</a>
        <a href="./?p=javascript">Javascript</a>
    </nav>
    <h1><?=$datas['titre']?> | <?=$titrepage?></h1>
    <p><?=nl2br($text)?></p>
    <?php
//var_dump($_GET);
    ?>
>>>>>>> b8f7ec52f13db0939775d2ffafd103e4a11ed403
</body>
</html>