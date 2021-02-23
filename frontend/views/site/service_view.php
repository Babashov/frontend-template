<?php

//foreach ($services as $serv)
//{
//    var_dump($serv->title);
//}
//
//exit();
?>
<section class="service-single">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="service-sidebar">
                    <ul class="service-catergory">
                        <?php foreach ($services as $serv): ?>
                            <li class="active">
                                <a href="<?= \yii\helpers\Url::base(true) . '/site/service-view/?id='.$serv->id; ?>">
                                    <span class="icon-left fa fa-chevron-right"></span>
                                    <?= $serv->title; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="outer-box">
                    <div class="img-box"><img src="/frontend/web/uploads//images/gallery/gallery-2/oturuculer%20qutusu/IMG6027.jpg" alt=""></div>
                    <div class="content-box">
                        <div class="sec-title">
                            <h4><?= $service?$service->title:"Tapilmadi"; ?></h4>
                        </div>
                        <div class="text">
                            <?= $service?$service->paragraph:"Tapilmadi"; ?>
                        </div>
                        <br><br>
                        <div class="row lightbox-gallery service-gallery">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="img-holder">
                                        <a href="/frontend/web/uploads//images/gallery/gallery-2/oturuculer%20qutusu/IMG6031.jpg" title="">
                                            <img src="/frontend/web/uploads//images/gallery/gallery-2/oturuculer%20qutusu/IMG6031.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="img-holder">
                                        <a href=" /frontend/web/uploads//images/gallery/gallery-2/oturuculer%20qutusu/IMG6027.jpg" title="">
                                            <img src=" /frontend/web/uploads//images/gallery/gallery-2/oturuculer%20qutusu/IMG6027.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="img-holder">
                                        <a href=" /frontend/web/uploads//images/gallery/gallery-2/oturuculer%20qutusu/IMG6050.jpg" title="">
                                            <img src=" /frontend/web/uploads//images/gallery/gallery-2/oturuculer%20qutusu/IMG6050.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="img-holder">
                                        <a href=" /frontend/web/uploads//images/gallery/gallery-2/oturuculer%20qutusu/IMG6053.jpg" title="">
                                            <img src=" /frontend/web/uploads//images/gallery/gallery-2/oturuculer%20qutusu/IMG6053.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="img-holder">
                                        <a href=" /frontend/web/uploads//images/gallery/gallery-2/oturuculer%20qutusu/IMG6056.jpg" title="">
                                            <img src=" /frontend/web/uploads//images/gallery/gallery-2/oturuculer%20qutusu/IMG6056.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="single-item">
                                    <div class="img-holder">
                                        <a href="<?=\yii\helpers\Url::base(true);?>/images/gallery/gallery-2/oturuculer%20qutusu/IMG6074.jpg" title="">
                                            <img src="<?=\yii\helpers\Url::base(true);?>//images/gallery/gallery-2/oturuculer%20qutusu/IMG6074.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>