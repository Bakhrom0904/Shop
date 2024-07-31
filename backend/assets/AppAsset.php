<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'assets/css/app.min.css',
        'assets/css/style.css',
        'assets/css/components.css',
        'assets/css/custom.css'
    ];
    public $js = [
        'assets/js/app.min.js',
        'assets/bundles/apexcharts/apexcharts.min.js',
        'assets/js/page/index.js',
        'assets/js/scripts.js',
        'assets/js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
