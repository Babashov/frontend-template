<section class="our-gallery lightbox-gallery">
    <div class="container">
        <div class="sec-title&nbsp; paga-sec-title">
            <h4><?= $this->params["translations"][5]; ?></h4>
        </div>
        <div class="row">
            <?php foreach ($galleries as $gallery): ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item ">
                        <div class="img-holder">
                            <img src="<?=$gallery->file_url;?>" alt="">


                            <div class="overlay">
                                <div class="inner">
                                    <div class="social">
                                        <a href="<?=$gallery->file_url;?>" class="view"><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>