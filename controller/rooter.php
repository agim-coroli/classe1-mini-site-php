<?php

// si il existe une page nommé php en get dans $_GET['p']
if (isset($_GET['p'])) {
    // si php
    if ($_GET['p'] == "php") {
        $titrepage = $datas['pages']['php']['titrepage'];
        $text = $datas['pages']['php']['text'];
    // si sql
    }elseif ($_GET['p'] == 'sql') {
        $titrepage = $datas['pages']['sql']['titrepage'];
        $text = $datas['pages']['sql']['text'];
    // si javascript
}   elseif ($_GET['p'] == 'javascript') {
        $titrepage = $datas['pages']['javascript']['titrepage'];
        $text = $datas['pages']['javascript']['text'];
    // si pas de p
} else{
    $titrepage = "404";
    $text = "Cette page nexiste pas";
}

}
# si accueil
else {
    $titrepage = $datas['pages']['php']['titrepage'];
    $text = $datas['pages']['php']['text'];
}