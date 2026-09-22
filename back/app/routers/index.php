<?php
//ROUTE USERS.LOGOUT
//PATTERN: users/logout
//URL: ?users=logout
//CTRL: usersController
//ACTION: logout
// Objectif: tuer la variable de session (unset())
// Rediriger vers l'accueil du public
if (isset($_GET['users'])):
    include_once '../app/routers/usersRouter.php';

//ROUTE CATEGORIES.INDEX
//PATTERN: categories/
//URL: ?categories=index
//CTRL: categoriesController
//ACTION: index
elseif (isset($_GET['categories'])):
    include_once '../app/routers/categoriesRouter.php';

//ROUTE POSTS.SHOW
//PATTERN: /posts/id/slug
//URL:?posts=show&id=x
//ROUTER posts
//ACTION showAction
else:
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\dashboardAction($conn);
endif;