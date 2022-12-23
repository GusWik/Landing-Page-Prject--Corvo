<div class="body__overlay"></div>
<!-- Start Offset Wrapper -->
<!-- Start Category Area -->
<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Produk</h2>
                </div>
            </div>
        </div>
        <div class="htc__product__container">
            <div class="row">
                <div class="product__list clearfix mt--30">
                    <?php foreach ($dataProduk as $key => $value) { ?>
                    <!-- Start Single Category -->
                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product-details.html">
                                    <img src="<?= base_url().$value->gambar?>" alt="product images">
                                </a>
                            </div>
                            <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="<?= base_url('front/dashboard/addCart/').$value->produk_id?>"><i class="icon-handbag icons"></i></a></li>

                                </ul>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="product-details.html"><?= $value->nama_produk?></a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize"><?= number_format($value->harga)?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Category Area -->