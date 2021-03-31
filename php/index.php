<?php

//Initialisation $currentPage pour éviter les problèmes d'index.
$currentPage = 'home';

// Vérification que $_GET est une valeur pour récupérer cette dernière
if (isset ($_GET['page'])){
    $currentPage = $_GET['page'];
}
require __DIR__.'/inc/data/datas.php';
require __DIR__.'/inc/templates/header.tpl.php'; // attention au lien relatif ils se font en fonction de l'emplacement du fichier actuel (ici index.php)
require __DIR__.'/inc/templates/home.tpl.php';
 