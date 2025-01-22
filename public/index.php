<?php
# public\index.php

// Affiche la variable globale $_GET => tableau associatif
// des variables se trouvent dans l'URL
// var_dump($_GET);

// constante de la bdd
const DB_MYSQL_TYPE = "mysql";
const DB_MYSQL_HOST = "localhost";
const DB_MYSQL_NAME = "db_mini_site";
const DB_MYSQL_LOGIN = "root";
const DB_MYSQL_PWD = "";
const DB_MYSQL_PORT =  3306;
const DB_MYSQL_ENCODE = "utf8";

// connexion a la base de donnée
try {
    $connectBD = new PDO(DB_MYSQL_TYPE.":host=".DB_MYSQL_HOST.";dbname=".DB_MYSQL_NAME.";port".DB_MYSQL_PORT.";charset=".DB_MYSQL_ENCODE, 
    DB_MYSQL_LOGIN, 
    DB_MYSQL_PWD
);
} catch (Exception $e) {
    die($e->getMessage());
}

// verification de la variable get requestGET pour effectuer la requete SQL
if(isset($_GET['requestGET'])) {
    $sql = "SELECT * FROM `pages` WHERE `id` = 2;";
} else{
    $sql = "SELECT * FROM `pages` WHERE `id` = 1;";
}

//  EXecution de la requete
$recup = $connectBD->query($sql);
//  Transformation du resultat en format phph tableau associatif
$response = $recup->fetch(PDO::FETCH_ASSOC);

// On appel la vue
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <nav>
        <a href="./">Accueil</a>
        <a href="./?requestGET=php">PHP</a>
        <a href="./?requestGET=sql">SQL</a>
        <a href="./?requestGET=javascript">javascript</a>
    </nav>
    <h1><?php echo $response['titlep'] ?></h1>
    <p><?php echo $response['textp'] ?></p>
    <?php var_dump($_GET,$connectBD,) ?>
</body>
</html>