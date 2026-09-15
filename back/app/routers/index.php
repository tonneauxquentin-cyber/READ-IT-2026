<?php

//ROUTE POSTS.SHOW
//PATTERN: /posts/id/slug
//URL:?posts=show&id=x
//ROUTER posts
//ACTION showAction
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\dashboardAction($conn);