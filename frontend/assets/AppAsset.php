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
    public $css = [
        'css/simpleLightbox.min.css',
        'css/style.css',
        'css/responsive.css',
        'fonts/flaticon.css',
    ];
    public $js = [
      'js/jquery.js',
      'js/bootstrap.min.js',
      'js/jquery-ui.js',
      'js/owl.carousel.min.js',
      'js/jquery.validate.min.js',
      'https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI',
      'js/gmap.js',
      'js/wow.js',
      'js/jquery.mixitup.min.js',
      'js/jquery.fitvids.js',
      'js/bootstrap-select.min.js',
      'assets/revolution/js/jquery.themepunch.tools.min.js',
      'assets/revolution/js/jquery.themepunch.revolution.min.js',
      'assets/revolution/js/extensions/revolution.extension.actions.min.js',
      'assets/revolution/js/extensions/revolution.extension.carousel.min.js',
      'assets/revolution/js/extensions/revolution.extension.kenburn.min.js',
      'assets/revolution/js/extensions/revolution.extension.layeranimation.min.js',
      'assets/revolution/js/extensions/revolution.extension.migration.min.js',
      'assets/revolution/js/extensions/revolution.extension.navigation.min.js',
      'assets/revolution/js/extensions/revolution.extension.parallax.min.js',
      'assets/revolution/js/extensions/revolution.extension.slideanims.min.js',
      'assets/revolution/js/extensions/revolution.extension.video.min.js',
      'js/jquery.fancybox.pack.js',
      'js/jquery.polyglot.language.switcher.js',
      'js/nouislider.js',
      'js/jquery.bootstrap-touchspin.js',
      'js/SmoothScroll.js',
      'js/jquery.appear.js',
      'js/jquery.countTo.js',
      'js/jquery.flexslider.js',
      'js/imagezoom.js',
      'js/isotope.js',
      'js/validation.js',
      'js/default-map.js',
      'js/jquery.ptTimeSelect.js',
      'js/simpleLightbox.min.js',
      'js/custom.js'

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
