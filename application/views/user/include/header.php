<div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
    <div class="bs-canvas-header side-cart-header p-3 ">
        <div class="d-inline-block  main-cart-title">Keranjang Saya</div>
        <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
    </div>
    <div class="bs-canvas-body">
        <div class="side-cart-items">
            <?php 
            $cekCart = $this->db->query("SELECT tp.*, tc.qty FROM tb_cart as tc INNER JOIN tb_produk as tp ON tp.produk_id = tc.id_produk WHERE id_customer = '".$customerLogin['UserID']."'")->result();
            $total = 0;
            foreach ($cekCart as $key => $value) {
                $hargaAll = $value->harga * $value->qty;
                $total += $hargaAll;
                ?>
            <div class="cart-item">
                <div class="cart-product-img">
                    <img src="<?= base_url().$value->gambar;?>" alt="">
                </div>
                <div class="cart-text">
                    <h4><?= $value->nama_produk?></h4>
                    <div class="qty-group">
                        <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus minus-btn">
                            <input type="number" step="1" name="quantity" class="input-text qty text" value="<?= $value->qty?>">
                            <input type="button" value="+" class="plus plus-btn">
                        </div>
                        <div class="cart-item-price">Rp <?= number_format($hargaAll)?></div>
                    </div>
                    <button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <div class="bs-canvas-footer">
        <div class="main-total-cart">
            <h2>Total</h2>
            <span>Rp <?= number_format($total)?></span>
        </div>
        <div class="checkout-cart">
            <a href="<?= base_url('front/dashboard/cart');?>" class="cart-checkout-btn hover-btn">Proceed to Checkout</a>
        </div>
    </div>
</div>


<header class="header clearfix">
    <div class="top-header-group">
        <div class="top-header">
            <div class="res_main_logo">
                <a href="<?= base_url('front/dashboard');?>"><img src="https://gambolthemes.net/html-items/gambo_supermarket_demo/images/dark-logo-1.svg" alt=""></a>
            </div>
            <div class="main_logo" id="logo">
                <a href="<?= base_url('front/dashboard');?>"><img src="<?= base_url('uploads/logo.png');?>" alt=""></a>
                <a href="<?= base_url('front/dashboard');?>"><img class="logo-inverse" src="<?= base_url('uploads/logo.png');?>" alt=""></a>
            </div>
            
            <div class="header_right">
                <ul>
                    <li class="ui dropdown" tabindex="0">
                        <?php if(!empty($customerLogin)){?>
                                
                            
                        <a href="#" class="opts_account">
                            <img src="https://gambolthemes.net/html-items/gambo_supermarket_demo/images/avatar/img-5.jpg" alt="">
                            <span class="user__name"><?= $customerLogin['Name']?></span>
                            <i class="uil uil-angle-down"></i>
                        </a>
                        <div class="menu dropdown_account" tabindex="-1">
                            <div class="night_mode_switch__btn">
                                <a href="#" id="night-mode" class="btn-night-mode">
                                    <i class="uil uil-moon"></i> Night mode
                                    <span class="btn-night-mode-switch">
                                    <span class="uk-switch-button"></span>
                                    </span>
                                </a>
                            </div>
                            <a href="<?= base_url('front/dashboard');?>" class="item channel_item"><i class="uil uil-apps icon__1"></i>Dashbaord</a>
                            <a href="<?= base_url('login/logout_customer');?>" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Logout</a>
                        </div>
                        <?php }else{?>
                            <a href="<?= base_url('login/customer');?>" class="offer-link"><i class="uil uil-lock-alt icon__1"></i>Login</a>
                        <?php }?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sub-header-group">
        <div class="sub-header">
            <div class="ui dropdown" tabindex="0">
                <a href="#" class="category_drop hover-btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i><span class="cate__icon">Select Category</span></a>
                <div class="menu" tabindex="-1"></div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light py-3">
                <div class="container-fluid">
                    <button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
                    <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                        <ul class="navbar-nav main_nav align-self-stretch">
                            <li class="nav-item"><a href="<?= base_url('front/dashboard');?>" class="nav-link active" title="Home">Home</a></li>
                            <li class="nav-item"><a href="<?= base_url('front/dashboard/produk');?>" class="nav-link new_item" title="New Products">Products</a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="catey__icon">
                <a href="#" class="cate__btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i></a>
            </div>
            <div class="header_cart order-1">
                <?php if(!empty($customerLogin)){?>
                        <?php $hitung = $this->db->query('SELECT COUNT(cart_id) AS jml FROM tb_cart WHERE id_customer = "'.$customerLogin['UserID'].'"')->row(); ?>
                    <a href="#" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart"><i class="uil uil-shopping-cart-alt"></i><span>Cart</span><ins><?= $hitung ->jml?></ins><i class="uil uil-angle-down"></i></a>
                <?php }else{?>
                    <a href="#" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart"><i class="uil uil-shopping-cart-alt"></i><span>Cart</span><ins>0</ins><i class="uil uil-angle-down"></i></a>
                <?php }?>
            </div>
            <div class="search__icon order-1">
                <a href="#" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model" title="Search"><i class="uil uil-search"></i></a>
            </div>
        </div>
    </div>
</header>