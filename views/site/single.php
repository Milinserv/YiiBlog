<?php use yii\helpers\Url; ?>
<div class="container">
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active"><?= $article->title; ?></li>
    </ol>

    <div class="col-md-8">
        <article class="col-sm-8">
            <header class="page-header">
                <h1 class="page-title"><?= $article->title; ?></h1>
                <span class="col-md-4"><?= $article->category->title; ?></span>
                <span class=""><?= $article->getDate(); ?></span>
            </header>
            <div class="row">
                <p>
                    <img src="<?= $article->getImage(); ?>" alt="">
                </p>
                <div>
                    <div class="row">
                        <p class="text-muted col-2"><?= $article->content; ?></p>
                    </div>
                </div>
            </div>
        </article>
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
                            <p class="text-muted"><?= $article->category->title; ?></p>
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
                        <a class="pe-auto"><?= $category->title ?></a>
                        <span class="pull-right">(<?= $category->getArticlesCount(); ?>)</span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
