<?php

//ROUTE POSTS.SHOW
//PATTERN: /posts/id/slug
//URL:?posts=show&id=x
//ROUTER posts
//ACTION showAction
if (isset($_GET['posts'])):
    include_once '../app/routers/posts.php';


//ROUTE PAR DEFAUT: Les 10 derniers posts
//PATTERN: /
//URL: ?
//CTRL: postsController
//Action: indexAction
else:
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($conn);
endif;