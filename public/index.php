<?php
# public\index.php

// Front Controller

// chargement des données (les dépendances)
include "../datas/datas.php";

// vérification si on a bien importer les données
var_dump($datas);

// Appel du router
include "../controller/router.php";


// Appel de la vue
include "../view/MyView.php";
