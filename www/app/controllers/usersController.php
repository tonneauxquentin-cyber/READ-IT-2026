<?php
namespace App\Controllers\UsersController;

use \PDO;
use \App\Models\UsersModel;
include_once '../app/models/usersModel.php';

function loginFormAction(PDO $conn) {
    GLOBAL $content, $title;
    $title = "Login Form";
    ob_start();
    include '../app/views/users/loginForm.php';
    $content = ob_get_clean();
}
function loginAction(PDO $conn, array $userData){
    //On va chercher le/la user.euse qui correspond aux userData
    $user = UsersModel\findOneByLoginAndPwd($conn, $userData);
    //Si y en a pas, on redirige vers la route login
    if(!$user):
        if (isset($_SESSION['user'])) unset($_SESSION['user']);
         header('location:' . PUBLIC_BASE_URL . '/users/login-form');
    //On redirige vers le dashboard admin
    else:
        //On donne le badge
        $_SESSION['user'] = $user;
        header('location:' . ADMIN_BASE_URL);
    endif;
}