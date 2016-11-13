<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    #public $sourcePath = '@bower/social/';

    public $css = [
        //'css/site.css',
        'css/styles.css',
#        'css/font-awesome.min.css',
    ];
    public $js = [
//        '//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js',
        'js/bootstrap.min.js',
        'js/scripts.js',
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
