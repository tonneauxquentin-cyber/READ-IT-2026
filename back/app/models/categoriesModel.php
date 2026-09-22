<?php
namespace App\Models\CategoriesModel;

use \PDO;

function findAll(PDO $conn, int $limit = 10): array{
    $sql = "SELECT *
            FROM categories
            ORDER BY name ASC
            LIMIT :limit";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}