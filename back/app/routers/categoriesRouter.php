<?php

use \App\Controllers\CategoriesController;

include '../app/controllers/categoriesController.php';
//PATTERN: users/logout
//URL: ?users=logout
//CTRL: usersController
//ACTION: logout
// Objectif: tuer la variable de session (unset())
// Rediriger vers l'accueil du public
switch ($_GET['categories']):
    case 'index':
        CategoriesController\indexAction($conn);
        break;
    endswitch;