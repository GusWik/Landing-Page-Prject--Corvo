<div class="wrapper">
    <div class="gambo-Breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('front/dashboard');?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Produk</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="all-product-grid">
        <div class="container">
            <!--
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-top-dt">
                        <div class="product-left-title">
                            <h2>Vegetables & Fruits</h2>
                        </div>
                        <a href="#" class="filter-btn pull-bs-canvas-right">Filters</a>
                        <div class="product-sort">
                            <div class="ui selection dropdown vchrt-dropdown">
                                <input name="gender" type="hidden" value="default">
                                <i class="dropdown icon d-icon"></i>
                                <div class="text">Popularity</div>
                                <div class="menu">
                                    <div class="item" data-value="0">Popularity</div>
                                    <div class="item" data-value="1">Price - Low to High</div>
                                    <div class="item" data-value="2">Price - High to Low</div>
                                    <div class="item" data-value="3">Alphabetical</div>
                                    <div class="item" data-value="4">Saving - High to Low</div>
                                    <div class="item" data-value="5">Saving - Low to High</div>
                                    <div class="item" data-value="6">% Off - High to Low</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
            <div class="product-list-view">
                <div class="row">
                    <?php foreach ($dataProduk as $key => $vp) { ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="product-item mb-30">
                            <a href="<?= base_url('front/dashboard/detailProduk/').$vp->produk_id;?>" class="product-img">
                                <img src="<?= base_url().$vp->gambar;?>" alt="">
                                
                            </a>
                            <div class="product-text-dt">
                                <?php if($vp->stok > 5){?>
                                <p>Available<span>(In Stock)</span></p>
                                <?php }else{?>
                                    <p>Stok<span><?= $vp->stok?></span></p>
                                <?php }?>
                                <h4 style="height:50px;"><?= $vp->nama_produk?></h4>
                                <div class="product-price"><?= number_format($vp->harga)?></div>
                                <div class="qty-cart">
                                    <form method="post" action="<?= base_url('front/dashboard/addCart/');?>" style="width: 100%;">
                                        <div class="quantity buttons_added">
                                            <input type="hidden" name="id_produk" value="<?= $vp->produk_id?>">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <button type="submit" class="cart-checkout-btn hover-btn" style="float:right;"> <i class="uil uil-shopping-cart-alt"></i> Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>