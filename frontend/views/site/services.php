<section class="our-services">
    <div class="container">
        <div class="sec-title">
            <h2><?= $this->params['translations'][12]; ?></h2>
        </div>
        <div class="item-list">
            <div class="row">
                <!--Start single item-->
                <?php foreach ($services as $service): ?>
                    <div class="col-md-4">
                    <div class="single-item text-center">

                        <div class="img-holder">
                            <img src="<?= $service->cover_image; ?>" alt="<?= $service->title; ?>">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="<?=\yii\helpers\Url::base(true).'/site/service-view/?id='.$service->id?>">
                                            <i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="/az/service/avtomatik-oturuculer-qutusunun-temiri-7.html">
                                <h5><?= $service->title; ?></h5>
                            </a>
                            <p></p>

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!--End single item-->
            </div>
        </div>
    </div>
</section>