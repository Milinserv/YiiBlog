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
                            <div class="row pull-right">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                </svg>
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