<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Category';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="container">
        <div class="col-md-8">
            <?php foreach ($articles as $article): ?>
                <a class=""
                   href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>">
                    <div class="row">
                        <p class="col-6 col-sm-4">
                            <img src="<?= $article->getImage(); ?>" alt="">
                        </p>
                        <div class="col-6 col-sm-4">
                            <div class="row">
                                <h2 class="thin p-0">
                                    <p><?= $article->title; ?></p>
                                </h2>
                                <p class="text-muted col-2"><?= $article->category->title; ?></p>
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
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
    echo LinkPager::widget([
        'pagination' => $pagination,
    ]);
    ?>
</div>
