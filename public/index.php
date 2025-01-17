<?php
// Front Controller

// chargement des données (les dependances)
include "../datas/datas.php";

// vérification si on a bien importer les données
// var_dump($datas);

// appel du rooter
include "../controller/rooter.php";

// Appel de la vue
include "../view/MyView.php";