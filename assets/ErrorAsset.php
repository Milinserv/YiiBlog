<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ErrorAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/errorCss/css/respons.css',
        'public/errorCss/css/style.css',
    ];
    public $js = [
        'public/errorCss/js/modernizr.custom.js',
        'public/errorCss/js/jquery.nicescroll.min.js',
        'public/errorCss/js/scripts.js'
    ];
    public $depends = [
    ];
}
