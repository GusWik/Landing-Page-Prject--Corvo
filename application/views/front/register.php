<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bakomart</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="<?= base_url('assets_front/')?>css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="<?= base_url('assets_front/')?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets_front/')?>css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?= base_url('assets_front/')?>css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?= base_url('assets_front/')?>css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?= base_url('assets_front/')?>style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= base_url('assets_front/')?>css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="<?= base_url('assets_front/')?>css/custom.css">
    <script src="<?= base_url('assets_front/')?>js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
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

        <div class="body__overlay"></div>
        <!-- Start Contact Area -->
        <section class="htc__contact__area bg__white">
            <div class="container">
                <div class="row">
                    <div class="contact-form-wrap mt--60">
                        <div class="col-xs-12">
                            <div class="contact-title">
                                <h2 class="title__line--6">Register</h2>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <form id="contact-form" action="<?= base_url('login/doRegisterCustomer');?>" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box subject">
                                        <input type="text" name="name" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" name="no_hp" placeholder="No HP">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box subject">
                                        <input type="text" name="alamat" placeholder="Alamat">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" name="username" placeholder="Username">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" class="fv-btn">Register</button>
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        <!-- End Contact Area -->
        <!-- Start Footer Area -->
        <footer id="htc__footer">
            <!-- Start Copyright Area -->
            <div class="htc__copyright bg__cat--5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="copyright__inner">
                                <p>Copyright© <a href="https://freethemescloud.com/">Free themes Cloud</a> 2018. All right reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </footer>
        <!-- End Footer Style -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
     <!-- jquery latest version -->
    <script src="<?= base_url('assets_front/')?>js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="<?= base_url('assets_front/')?>js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?= base_url('assets_front/')?>js/plugins.js"></script>
    <script src="<?= base_url('assets_front/')?>js/slick.min.js"></script>
    <script src="<?= base_url('assets_front/')?>js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="<?= base_url('assets_front/')?>js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="<?= base_url('assets_front/')?>js/main.js"></script>

</body>

</html>