<!-- Start Header Style -->
<header id="htc__header" class="htc__header__area header--one">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
        <div class="container">
            <div class="row">
                <div class="menumenu__container clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                        <div class="logo">
                             <a href="<?= base_url('front/dashboard')?>"><img src="<?= base_url('uploads/')?>tokoridwan.jpg" alt="logo images"></a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                        <nav class="main__menu__nav hidden-xs hidden-sm">
                            <ul class="main__menu">
                                <li class="drop"><a href="<?= base_url('front/dashboard');?>">Home</a></li>
                                <li class="drop"><a href="#">Category</a>
                                    <ul class="dropdown">
                                        <?php $category = $this->db->query("select * from tb_kategori")->result();
                                            foreach ($category as $key => $value) { ?>
                                            <!-- Start Single Mega MEnu -->
                                            <li><a href="<?= base_url('front/dashboard/produkKategori/').$value->kategori_id?>"><?= $value->nama_kategori?></a></li>
                                            <!-- End Single Mega MEnu -->
                                        <?php }?>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('front/dashboard/produk')?>">Produk</a></li>
                                <?php if(empty($customerLogin)){?>
                                <li><a href="<?= base_url('login/registerCustomer');?>">Register</a></li>
                                <li><a href="<?= base_url('login/customer');?>">Login</a></li>
                                <?php }else{?>
                                <li><a href="<?= base_url('front/dashboard/profil');?>">Profil</a></li>    
                                <li><a href="<?= base_url('login/logout_customer');?>">Logout</a></li>    
                                <?php }?>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                        <div class="header__right">
                            <div class="htc__shopping__cart">
                                <a class="cart__menu" href="<?= base_url('front/dashboard/cart');?>"><i class="icon-handbag icons"></i></a>
                                <?php if(!empty($customerLogin)){?>
                                <?php $hitung = $this->db->query('SELECT COUNT(cart_id) AS jml FROM tb_cart WHERE id_customer = "'.$customerLogin['UserID'].'"')->row(); ?>
                                <a href="<?= base_url('front/dashboard/cart');?>"><span class="htc__qua"><?= $hitung ->jml?></span></a>
                                <?php }else{?>
                                    <a href="<?= base_url('front/dashboard/cart');?>"><span class="htc__qua">0</span></a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area"></div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
<!-- End Header Area -->