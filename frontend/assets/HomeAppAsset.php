<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class HomeAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    #public $sourcePath = '@web/theme/fullpage/';

    public $css = [
        'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin',
        'https://fonts.googleapis.com/css?family=Montserrat:400,700',
        'https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i',
        'theme/fullpage/assets/bootstrap-material-design-font/css/material.css',
        'theme/fullpage/assets/et-line-font-plugin/style.css',
        'theme/fullpage/assets/tether/tether.min.css',
        'theme/fullpage/assets/bootstrap/css/bootstrap.min.css',
        'theme/fullpage/assets/animate.css/animate.min.css',
        'theme/fullpage/assets/dropdown/css/style.css',
        'theme/fullpage/assets/socicon/css/socicon.min.css',
        'theme/fullpage/assets/theme/css/style.css',
        'theme/fullpage/assets/mobirise-gallery/style.css',
        'theme/fullpage/assets/mobirise/css/mbr-additional.css',
        #'css/bootstrap.min.css',
    ];
    public $js = [
//        '//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js',
//        'js/bootstrap.min.js',
        'theme/fullpage/assets/web/assets/jquery/jquery.min.js',
        'theme/fullpage/assets/tether/tether.min.js',
        'theme/fullpage/assets/bootstrap/js/bootstrap.min.js',
        'theme/fullpage/assets/smooth-scroll/SmoothScroll.js',
        'theme/fullpage/assets/viewportChecker/jquery.viewportchecker.js',
        'theme/fullpage/assets/dropdown/js/script.min.js',
        'theme/fullpage/assets/touchSwipe/jquery.touchSwipe.min.js',
        'theme/fullpage/assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js',
        'theme/fullpage/assets/jquery-mb-ytplayer/jquery.mb.YTPlayer.min.js',
        'theme/fullpage/assets/masonry/masonry.pkgd.min.js',
        'theme/fullpage/assets/imagesloaded/imagesloaded.pkgd.min.js',
        'theme/fullpage/assets/jarallax/jarallax.js',
        'theme/fullpage/assets/theme/js/script.js',
        'theme/fullpage/assets/mobirise-slider-video/script.js',
        'theme/fullpage/assets/mobirise-gallery/script.js',
        'theme/fullpage/assets/formoid/formoid.min.js',
    ];
    public $depends = [
        #'yii\web\YiiAsset',
        #'yii\bootstrap\BootstrapAsset',
    ];
}
