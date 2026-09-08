<?php
/** @var array $posts*/; ?>

<div class="container">
    <div class="row d-flex">
        <?php foreach ($posts as $post): ?>
            <?php include '../app/views/posts/_index.php' ?>
        <?php endforeach; ?>        
    </div>
</div>