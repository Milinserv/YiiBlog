<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/css/bootstrap.min.css',
        'public/css/font-awesome.min.css',
        'public/css/bootstrap-theme.css',
        'public/css/main.css',
    ];
    public $js = [
        'public/js/jquery.min.js',
        'public/js/bootstrap.min.js',
        'public/js/headroom.min.js',
        'public/js/jQuery.headroom.min.js',
        'public/js/template.js'
    ];
    public $depends = [
    ];
}
