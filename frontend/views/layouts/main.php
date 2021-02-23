<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\components\Helper;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<?//= \yii\helpers\Url::base(true); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cangang || Responsive HTML 5 Template</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php $this->registerCsrfMetaTags(); ?>
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=\yii\helpers\Url::base(true);?>/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?=\yii\helpers\Url::base(true);?>/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?=\yii\helpers\Url::base(true);?>/images/favicon/favicon-16x16.png" sizes="16x16">
    <?php $this->head(); ?>

</head>
<?php $this->beginBody(); ?>
<body>
<?php //print_r($this->params["translations"]);exit(); ?>
<div class="boxed_wrapper">
    <div class="header-top">
        <div class="container clearfix">
            <!--Top Left-->
            <div class="top-left pull-left">
                <ul class="links-nav clearfix">
                    <li><a href="#"><span class="fa fa-map"></span>  <?= $this->params['translations'][0]; ?>: <?= $this->params["settings"]["address"] ?> </a></li>
                    <li><a href="#"><span class="fa fa-envelope"></span><?= $this->params['translations'][1]; ?>:  <?= $this->params["settings"]["email"] ?></a></li>
                </ul>
            </div>
            <!--Top Right-->
            <div class="top-right pull-right">
                <div class="social-links clearfix">
                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-instagram"></span></a>
                    <a href="#"><span class="fa fa-pinterest-p"></span></a>
                </div>
            </div>
        </div>
    </div><!-- Header Top End -->

    <section class="mainmenu-area stricky">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="main-logo">
                        <a href="index.html"><img src="<?=\yii\helpers\Url::base(true);?>/<?= $this->params['settings']['logo'] ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 menu-column">
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="/haqqimizda"><?= $this->params['translations'][2]; ?></a></li>
                                <li><a href="/service"><?= $this->params['translations'][4]; ?></a></li>
                                <li><a href="/gallery"><?= $this->params['translations'][5]; ?></a></li>
                                <li><a href="/elaqe"><?= $this->params['translations'][6]; ?></a></li>
                                <li>
                                    <select name="" id="language">
                                        <?php foreach((Helper::changeLanguageNameToReadable(Yii::$app->language)) as $lang): ?>
                                                <option value="<?= explode(",",$lang)[1]?>" id="lang_<?= explode(",",$lang)[1]?>"><?= explode(",",$lang)[0]; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </li>
                            </ul>

                            <ul class="mobile-menu clearfix">
                                <li><a href="about.html"><?= $this->params['translations'][2]; ?></a></li>
                                <li><a href="about.html"><?= $this->params['translations'][4]; ?></a></li>
                                <li><a href="about.html"><?= $this->params['translations'][5]; ?></a></li>
                                <li><a href="contact.html"><?= $this->params['translations'][6]; ?></a></li>

                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-2">
                    <div class="right-area">
                        <div class="link_btn float_right">
                            <a href="#" class="thm-btn donate-box-btn"><?= $this->params['translations'][7]; ?></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php echo $content; ?>

    <!--call-to-action section-->
    <section class="call-to-action subscribe-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3><?= $this->params['settings']['subscribe_title'] ?></h3>
                    <p><?= $this->params['settings']['subscribe_paragraph'] ?></p>
                </div>
                <div class="col-md-3">
                    <a href="contact.html" class="thm-btn inverse pull-right"><?= $this->params['translations'][13]; ?></a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer bg-style" style="background-image:url(<?=\yii\helpers\Url::base(true);?>/images/background/bg-3.jpg);">
        <div class="container">
            <div class="footer-upper">

                <div class="row">
                    <div class="item col-md-3 col-sm-6">
                        <div class="footer-widget about-widget">
                            <h3 class="title"><?= $this->params['translations'][2] ?></h3>
                            <p>
                                <?= $this->params["settings"]["about_us"] ?>
                            </p>
                        </div>
                    </div>


                    <div class="item col-md-3 col-sm-6">
                        <div class="footer-widget our-service">
                            <h3 class="title"><?= $this->params['translations'][14]; ?></h3>
                            <ul>
                                <li><a href="#"><?= $this->params['translations'][3]; ?></a></li>
                                <li><a href="#"><?= $this->params['translations'][2]; ?></a></li>
                                <li><a href="#"><?= $this->params['translations'][4]; ?></a></li>
                                <li><a href="#"><?= $this->params['translations'][5]; ?></a></li>
                                <li><a href="#"><?= $this->params['translations'][6]; ?></a></li>
                            </ul>


                        </div>
                    </div>

                    <div class="item col-md-3 col-sm-6">
                        <div class="footer-widget our-service">
                            <h3 class="title"><?= $this->params['translations'][4]; ?></h3>
                            <ul>
                                <?php foreach ($this->params['services'] as $service): ?>
                                    <li><a href="#"><?= $service['title'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>


                        </div>
                    </div>

                    <div class="item col-md-3 col-sm-6">

                        <div class="footer-widget gallery-widget">
                            <h3 class="title"><?= $this->params['translations'][5]; ?></h3>
                            <div class="thumbs-outer clearfix">
                                <figure class="image">
                                    <img src="<?=\yii\helpers\Url::base(true);?>/images/resources/f-1.jpg" alt="">
                                    <a href="#" class="link-image">
                                        <span class="fa fa-link"></span>
                                    </a>
                                </figure>
                                <figure class="image">
                                    <img src="<?=\yii\helpers\Url::base(true);?>/images/resources/f-2.jpg" alt="">
                                    <a href="#" class="link-image">
                                        <span class="fa fa-link"></span>
                                    </a>
                                </figure>
                                <figure class="image">
                                    <img src="<?=\yii\helpers\Url::base(true);?>/images/resources/f-3.jpg" alt="">
                                    <a href="#" class="link-image">
                                        <span class="fa fa-link"></span>
                                    </a>
                                </figure>
                                <figure class="image">
                                    <img src="<?=\yii\helpers\Url::base(true);?>/images/resources/f-4.jpg" alt="">
                                    <a href="#" class="link-image">
                                        <span class="fa fa-link"></span>
                                    </a>
                                </figure>
                                <figure class="image">
                                    <img src="<?=\yii\helpers\Url::base(true);?>/images/resources/f-5.jpg" alt="">
                                    <a href="#" class="link-image">
                                        <span class="fa fa-link"></span>
                                    </a>
                                </figure>
                                <figure class="image">
                                    <img src="<?=\yii\helpers\Url::base(true);?>/images/resources/f-6.jpg" alt="">
                                    <a href="#" class="link-image">
                                        <span class="fa fa-link"></span>
                                    </a>
                                </figure>
                                <figure class="image">
                                    <img src="<?=\yii\helpers\Url::base(true);?>/images/resources/f-7.jpg" alt="">
                                    <a href="#" class="link-image">
                                        <span class="fa fa-link"></span>
                                    </a>
                                </figure>
                                <figure class="image">
                                    <img src="<?=\yii\helpers\Url::base(true);?>/images/resources/f-8.jpg" alt="">
                                    <a href="#" class="link-image">
                                        <span class="fa fa-link"></span>
                                    </a>
                                </figure>
                                <figure class="image">
                                    <img src="<?=\yii\helpers\Url::base(true);?>/images/resources/f-9.jpg" alt="">
                                    <a href="#" class="link-image">
                                        <span class="fa fa-link"></span>
                                    </a>
                                </figure>
                                <figure class="image">
                                    <img src="<?=\yii\helpers\Url::base(true);?>/images/resources/f-10.jpg" alt="">
                                    <a href="#" class="link-image">
                                        <span class="fa fa-link"></span>
                                    </a>
                                </figure>
                                <figure class="image">
                                    <img src="<?=\yii\helpers\Url::base(true);?>/images/resources/f-11.jpg" alt="">
                                    <a href="#" class="link-image">
                                        <span class="fa fa-link"></span>
                                    </a>
                                </figure>
                                <figure class="image">
                                    <img src="<?=\yii\helpers\Url::base(true);?>/images/resources/f-12.jpg" alt="">
                                    <a href="#" class="link-image">
                                        <span class="fa fa-link"></span>
                                    </a>
                                </figure>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="pull-left"><div class="copyright-text"><?= $this->params["settings"]["copyright"] ?></div></div>
                <div class="pull-right">
                    <div class="social-links pull-right">
                        <a href="#"><span class="fa fa-facebook-f"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-instagram"></span></a>
                        <a href="#"><span class="fa fa-pinterest-p"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="donate-popup" class="donate-popup">
        <div class="close-donate theme-btn"><span class="fa fa-close"></span></div>
        <div class="popup-inner">
            <div class="container">
                <div class="donate-form-area">
                    <div class="section-title center">
                        <h2><?= $this->params['translations'][8]; ?></h2>
                    </div>
                    <form  action="<?= \yii\helpers\Url::base(true) .'/site/call-me' ?>" class="donate-form default-form" method="post">
                        <div class="form-bg">
                            <div class="row clearfix">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="full_name" placeholder="<?= $this->params['translations'][9]; ?>">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="telephone" placeholder="<?= $this->params['translations'][10]; ?>">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="description" placeholder="<?= $this->params['translations'][11]; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="center"><button class="thm-btn style-2" type="submit"><?= $this->params['translations'][7]; ?></button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Top Button -->
    <button class="scroll-top tran3s color2_bg">
        <span class="fa fa-angle-up"></span>
    </button>
    <!-- pre loader  -->
    <div class="preloader"></div>

</div>

<script>

    var languageSelect = document.querySelector("#language");
    languageSelect.addEventListener('change',($event)=>{
        let selectedOption = languageSelect.value;
        window.location.href = `/site/change-lang?lang=${selectedOption}`
    });

</script>

</body>
<?php $this->endBody(); ?>
</html>
<?php $this->endPage();?>