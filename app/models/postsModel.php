<?php
namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $conn): array{
    $sql = "SELECT *, YEAR(created_at) as YEAR, MONTH(created_at) as MONTH, DAY(created_at) as DAY
            FROM posts
            ORDER BY created_at DESC
            LIMIT 10";
    $rs = $conn->prepare($sql);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
function findOneById(PDO $conn, int $id): array{
    $sql = "SELECT *, YEAR(created_at) as YEAR, MONTH(created_at) as MONTH, DAY(created_at) as DAY
            FROM posts
            WHERE id =:id";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}