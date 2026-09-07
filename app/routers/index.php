<?php

if (isset($_GET['postID'])):
    include_once '../app/routers/posts.php';
    \App\Controllers\PostsController\showAction($conn, $_GET['postID']);


//ROUTE PAR DEFAUT: Les 10 derniers posts
//PATTERN: /
//URL: ?
//CTRL: postsController
//Action: indexAction
else:
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($conn);
endif;