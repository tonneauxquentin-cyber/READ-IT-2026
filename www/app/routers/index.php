<?php

//ROUTE POSTS
//PATTERN: /posts/...
//URL:?posts=...
//ROUTER posts
//ACTION showAction
if (isset($_GET['posts'])):
    include_once '../app/routers/posts.php';


    //ROUTE USERS.LOGIN-FORM
//PATTERN: /users/...
//URL:?users=...
//ROUTER users
//ACTION showAction
elseif (isset($_GET['users'])):
    include_once '../app/routers/users.php';


//ROUTE PAR DEFAUT: Les 10 derniers posts
//PATTERN: /
//URL: ?
//CTRL: postsController
//Action: indexAction
else:
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($conn);
endif;