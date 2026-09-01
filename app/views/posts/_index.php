
<?php 
/** @var array $post*/

use function Core\Helpers\formatMonth;

; ?>

<div class="col-md-6 d-flex ftco-animate">
    <div class="blog-entry justify-content-end">
        <a href="article.html" class="block-20" style="background-image: url('images/<?php echo $post['image']; ?>');">
        </a>
        <div class="text p-4 float-right d-block">
            <div class="topper d-flex align-items-center">
                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                    <span class="day"><?php echo $post['DAY']; ?></span>
                </div>
                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                    <span class="yr"><?php echo $post['YEAR']; ?></span>
                    <span class="mos"><?php echo formatMonth($post['MONTH']); ?></span>
                </div>
            </div>
            <h3 class="heading mb-3"><a href="#"><?php echo $post['title']; ?></a></h3>
            <p> <?php echo \Core\Helpers\truncate($post['content'],50); ?></p>
            <p><a href="article.html" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
         </div>
    </div>
</div>