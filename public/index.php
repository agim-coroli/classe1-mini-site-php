<?php
# public\index.php

// Front Controller

<<<<<<< HEAD
// chargement des données (les dependances)
include "../datas/datas.php";

// vérification si on a bien importer les données
// var_dump($datas);

// appel du rooter
include "../controller/rooter.php";

// Appel de la vue
include "../view/MyView.php";
=======
// chargement des données (les dépendances)
include "../datas/datas.php";

// vérification si on a bien importer les données
//var_dump($datas);

// Appel du router
include "../controller/router.php";


// Appel de la vue
include "../view/MyView.php";
>>>>>>> b8f7ec52f13db0939775d2ffafd103e4a11ed403
