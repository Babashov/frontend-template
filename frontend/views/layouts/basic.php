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
<?= $content; ?>
</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage(); ?>
