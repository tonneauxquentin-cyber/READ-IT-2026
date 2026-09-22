<?php

use \App\Controllers\UsersController;

include '../app/controllers/usersController.php';
//PATTERN: users/logout
//URL: ?users=logout
//CTRL: usersController
//ACTION: logout
// Objectif: tuer la variable de session (unset())
// Rediriger vers l'accueil du public
switch ($_GET['users']):
    case 'logout':
        UsersController\logoutAction();
        break;
    endswitch;