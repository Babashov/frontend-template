<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


<!--Start rev slider wrapper-->
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            <?php foreach ($sliders as $slider): ?>
                <li data-transition="fade">
                    <img src="<?= $slider['image_url']; ?>"  alt="" width="1920" height="900" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >

                    <div class="tp-caption  tp-resizeme"
                         data-x="center" data-hoffset="0"
                         data-y="top" data-voffset="210"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="700">
                        <div class="slide-content-box">
                            <h1><?= $slider['title']; ?></h1>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</section>
<!--End rev slider wrapper-->


<!-- introduce  start area -->
<section class="introduce_area">
    <div class="container">
        <div class="row">

            <!-- introduce icon area start -->
            <?php foreach ($introduces as $introduce): ?>
                <div class="column col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="icon-box">
                        <i class="<?= $introduce['icon_type'] ?>"></i>
                    </div>
                    <div class="content-box">
                        <h2><?= $introduce['title']; ?></h2>
                        <p><?= $introduce["paragraph"]; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- introduce icon area end -->
        </div>
    </div>
</section>
<!-- introduce end area -->

<!--Start know about area-->
<section class="Welcome-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-12">

                <div class="yt-main yt-main-about-us">
                    <div class="img-holder lightbox-gallery">
                        <img src="<?= $about_us->image; ?>" alt="">
                        <a href="<?= $about_us->video_link; ?>" data-iframe="true" class="view youtube"></a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-12">
                <div class="text-holder">
                    <div class="top-text">
                        <h3><?= $about_us->title; ?></h3>
                        <p><?= $about_us->paragraph; ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End know about area-->

<!--Paralax Style One-->
<section class="parallax-style-one" style="background-image:url(images/background/bg-4.jpg);">
    <div class="container">
        <div class="overlay">
            <!--Fact Counter-->
            <div class="fact-counter">
                <div class="row">
                    <div class="counter-outer">
                        <?php foreach ($counter as $counter): ?>
                            <!--Column-->
                            <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="600ms">
                                <div class="item">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <i class="icon <?= $counter->icon_type; ?>"></i>
                                        </div>
                                        <div class="count-outer">
                                            <span class="count-text" data-speed="3000" data-stop="<?= $counter->count; ?>">0</span>
                                            <p><?= $counter->title ?></p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class=our-services>
    <div class="container">
        <div class="sec-title">
            <h2><?= $this->params['translations'][12]; ?></h2>
        </div>
        <div class="item-list">
            <div class="row">
                <?php foreach ($this->params['services'] as $service): ?>
                    <!--Start single item-->
                    <div class="col-md-4">
                        <div class="single-item text-center">

                            <div class="img-holder">
                                <img src="<?= $service['cover_image'] ?>" alt="Awesome Image">
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="#">
                                    <h5><?= $service['title'] ?></h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
