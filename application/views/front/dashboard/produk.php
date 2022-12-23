<div class="body__overlay"></div>
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area">
        <div class="row">
            <div class="col-xs-12">
                <div class="bradcaump__inner">
                    <nav class="bradcaump-inner">
                      <a class="breadcrumb-item" href="index.html">Home</a>
                      <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                      <span class="breadcrumb-item active">Products</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Product Grid -->
    <section class="htc__product__grid bg__white ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">
                    <div class="htc__product__rightidebar">
                        
                        <!-- Start Product View -->
                        <div class="row">
                            <div class="shop__grid__view__wrap">
                                <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
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
                        <!-- End Product View -->
                    </div>
                    <!-- Start Pagenation --
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="htc__pagenation">
                               <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li> 
                               <li><a href="#">1</a></li> 
                               <li class="active"><a href="#">3</a></li>   
                               <li><a href="#">19</a></li> 
                               <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li> 
                            </ul>
                        </div>
                    </div>
                    <!-- End Pagenation -->
                </div>
                <div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
                    <div class="htc__product__leftsidebar">
                        <!-- Start Category Area -->
                        <div class="htc__category">
                            <h4 class="title__line--4">Kategori</h4>
                            <ul class="ht__cat__list">
                                <?php foreach ($dataKategori as $key => $vk) {?>
                                <li><a href="<?= base_url('front/dashboard/produkKategori/').$vk->kategori_id?>"><?= $vk->nama_kategori?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- End Category Area -->
                        
                        <!-- End Best Sell Area -->
                    </div>
                </div>
            </div>
        </div>
    </section>