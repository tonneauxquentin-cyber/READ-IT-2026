<?php

namespace App\Controllers\UsersController;
use \App\Models\UsersModel;
use \PDO;

include '../app/models/usersModel.php';

function logoutAction() {
    //Je tue la variable de session 'user'
    unset($_SESSION['user']);
    //Je redirige vers le site public
    header('Location: ' . PUBLIC_BASE_URL);
}