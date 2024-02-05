<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
    <div class="container">
        <div class="col-md-8">
            <?php foreach ($articles as $article): ?>
                    <div class="row">
                        <p class="col-6 col-sm-4">
                            <img src="<?= $article->getImage(); ?>" alt="">
                        </p>
                        <div class="col-6 col-sm-4">
                            <div class="row">
                                <h2 class="thin p-0">
                                    <a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>">
                                        <?= $article->title; ?>
                                    </a>
                                </h2>
                                <a href="<?= Url::toRoute(['site/category', 'id' => $article->category->id]); ?>" class="text-muted col-2">
                                    <?= $article->category->title; ?>
                                </a>
                            </div>
                            <div class="row">
                                <?= $article->description ?>
                            </div>
                            <div class="row">
                                <?= $article->getDate(); ?>
                            </div>
                            <div class="row">
                                <?= (int)$article->viewed ?>
                            </div>
                        </div>
                    </div>
            <?php endforeach; ?>
        </div>
        <div class="col-md-4">
            <div class="row">
                <h1>Popular posts</h1>
                <?php foreach ($popular as $article): ?>
                    <div class="row">
                        <p class="col-6 col-sm-4">
                            <img src="<?= $article->getImage(); ?>" alt="">
                        </p>
                        <div class="col-6 col-sm-6">
                            <div class="row">
                                <h2 class="thin">
                                    <a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>">
                                        <?= $article->title; ?>
                                    </a>
                                </h2>
                                <a href="<?= Url::toRoute(['site/category', 'id' => $article->category->id]); ?>" class="text-muted"><?= $article->category->title; ?></a>
                            </div>
                            <div class="row">
                                <?= $article->getDate(); ?>
                            </div>
                            <div class="row">
                                <?= (int)$article->viewed; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <h1>Categories</h1>
                <ul class="list-group">
                    <?php foreach ($categories as $category): ?>
                        <li class="list-group-item ">
                            <a href="<?= Url::toRoute(['site/category', 'id' => $category->id]); ?>" class="pe-auto"><?= $category->title ?></a>
                            <span class="pull-right">(<?= $category->getArticlesCount(); ?>)</span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

<?php
echo LinkPager::widget([
    'pagination' => $pagination,
]);
?>