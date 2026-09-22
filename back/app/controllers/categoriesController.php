<?php

namespace App\Controllers\CategoriesController;
use \App\Models\CategoriesModel;
use \PDO;

include '../app/models/categoriesModel.php';

function indexAction(PDO $conn){
    $categories = CategoriesModel\findAll($conn);
    global $content, $itile;
    $title = "GESTION DES CATÉGORIES";
    ob_start();
    include '../app/views/categories/index.php';
    $content = ob_get_clean();
}