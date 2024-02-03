<?php

use yii\widgets\LinkPager;

?>
    <div class="container">
        <?php foreach ($articles as $article): ?>
            <div class="row">
                <p class="col-6 col-sm-4">
                    <img src="<?= $article->getImage(); ?>" alt="">
                </p>
                <div class="col-6 col-sm-4">
                    <div class="row">
                        <h2 class="thin p-0"><?= $article->title; ?></h2>
                        <p class="text-muted col-2"><?= $article->category->title; ?></p>
                    </div>
                    <div class="row">
                        <?= $article->description ?>
                    </div>
                    <div class="row">
                        <?= $article->date ?>
                    </div>
                    <div class="row">
                        <?=(int) $article->viewed ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<?php
echo LinkPager::widget([
    'pagination' => $pagination,
]);
?>