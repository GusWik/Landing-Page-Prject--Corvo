<link rel="stylesheet" type="text/css" href="<?= base_url('assets_front/gombo/css/step-wizard.css');?>">
<div class="wrapper">
    <div class="gambo-Breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('front/dashboard');?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="all-product-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <form method="post" action="<?= base_url('front/dashboard/addTransaksi');?>">
                        <div id="checkout_wizard" class="checkout accordion left-chck145">
                            <?php 
                            $total = 0;
                            foreach ($dataCart as $key => $vdc) {
                            $total += $vdc->harga * $vdc->qty;
                            }?>
                            <input type="hidden" name="total_harga" value="<?= $total?>"> 
                            <div class="checkout-step">
                                <div class="checkout-card" id="headingOne">
                                    <span class="checkout-step-number">1</span>
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Phone Number Verification</button>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="collapse in show" data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                        <p>Kami membutuhkan nomor telepon Anda sehingga kami dapat memberi tahu Anda tentang keterlambatan atau masalah apa pun.</p>
                                        <div class="col-lg-8">
                                            <div class="checkout-login">
                                                <div class="login-phone">
                                                    <input type="text" class="form-control" name="no_telp" placeholder="Phone Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-step">
                                <div class="checkout-card" id="headingTwo">
                                    <span class="checkout-step-number">2</span>
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Delivery Address</button>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                        <div class="checout-address-step">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    
                                                    <div class="address-fieldset">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Nama*</label>
                                                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Email*</label>
                                                                    <input id="email1" name="email" type="text" placeholder="Email Address" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Alamat Rumah*</label>
                                                                    <input id="flat" name="alamat" type="text" placeholder="Address" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Jalan*</label>
                                                                    <input id="street" name="street" type="text" placeholder="Street Address" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Kode Pos*</label>
                                                                    <input id="pincode" name="kodepos" type="text" placeholder="Pincode" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Locality*</label>
                                                                    <input id="Locality" name="locality" type="text" placeholder="Enter City" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-step">
                                <div class="checkout-card" id="headingThree">
                                    <span class="checkout-step-number">3</span>
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Delivery Time & Date </button>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Select Date and Time*</label>
                                                    <div class="date-slider-group">
                                                        <div class="owl-carousel date-slider owl-theme">
                                                            <?php 
                                                            $today            = date("d-m-Y");
                                                            for($i=0; $i<6; $i++){
                                                            $day        = mktime(0,0,0,date("n"),date("j")+$i,date("Y"));

                                                            $kembali        = date("Y-m-d", $day);
                                                            if($i == 0){
                                                                $hari = 'Today';
                                                            }elseif($i == 1){
                                                                $hari = 'Tomorrow';
                                                            }else{
                                                                $hari = tgl_indo($kembali);
                                                            }
                                                            ?>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd_<?= $i?>" name="day" value="<?= $kembali?>">
                                                                    <label for="dd_<?= $i?>"><?= $hari?></label>
                                                                </div>
                                                            </div>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                    <div class="time-radio">
                                                        <div class="ui form">
                                                            <div class="grouped fields">
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="jam" checked="" tabindex="0" class="hidden" value="8.00AM - 10.00AM">
                                                                        <label>8.00AM - 10.00AM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="jam" tabindex="0" class="hidden" value="10.00AM - 12.00PM">
                                                                        <label>10.00AM - 12.00PM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="jam" tabindex="0" class="hidden" value="12.00PM - 2.00PM">
                                                                        <label>12.00PM - 2.00PM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="jam" tabindex="0" class="hidden" value="2.00PM - 4.00PM">
                                                                        <label>2.00PM - 4.00PM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="jam" tabindex="0" class="hidden" value="4.00PM - 6.00PM">
                                                                        <label>4.00PM - 6.00PM</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-step">
                                <div class="checkout-card" id="headingFour">
                                    <span class="checkout-step-number">4</span>
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Payment</button>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                        <div class="payment_method-checkout">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="rpt100">
                                                        <ul class="radio--group-inline-container_1">
                                                            <li>
                                                                <div class="radio-item_1">
                                                                    <input id="cashondelivery1" value="cashondelivery" name="paymentmethod" type="radio" data-minimum="50.0">
                                                                    <label for="cashondelivery1" class="radio-label_1">Cash on Delivery</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="radio-item_1">
                                                                    <input id="card1" value="card" name="paymentmethod" type="radio" data-minimum="50.0">
                                                                    <label for="card1" class="radio-label_1">Transfer</label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="form-group return-departure-dts" data-method="cashondelivery">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="pymnt_title">
                                                                    <h4>Cash on Delivery</h4>
                                                                    <p>Pembayaran dilakukan ketika produk sudah sampai dirumah.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group return-departure-dts" data-method="card">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="pymnt_title">
                                                                    <h4>Transfer</h4>
                                                                    <p>Silahkan Transfer ke Bank BNI no Rekening 1234567890 Atas Nama Bako-Mart.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary hover-btn" style="background: #8bc53f;border-color: #8bc53f;">Place Order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="pdpt-bg mt-0">
                        <div class="pdpt-title">
                            <h4>Order Summary</h4>
                        </div>
                        <?php 
                        $total = 0;
                        foreach ($dataCart as $key => $vdc) {
                            $total += $vdc->harga * $vdc->qty;
                            ?>
                        <div class="right-cart-dt-body">
                            <div class="cart-item border_radius">
                                <div class="cart-product-img">
                                    <img src="<?= base_url().$vdc->gambar;?>" alt="">
                                </div>
                                <div class="cart-text">
                                    <h4><?= $vdc->nama_produk?></h4>
                                    <div class="cart-item-price">Rp <?= number_format($vdc->harga * $vdc->qty)?></div>
                                    <button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="main-total-cart">
                            <h2>Total</h2>
                            <span>Rp <?= number_format($total)?></span>
                        </div>
                        
                        <div class="payment-secure">
                            <i class="uil uil-padlock"></i>Secure checkout
                        </div>
                    </div>
                    <!--<a href="#modalVoucher" data-toggle="modal" class="promo-link45">Have a promocode?</a>-->
                    <div class="checkout-safety-alerts">
                        <p><i class="uil uil-sync"></i>100% Replacement Guarantee</p>
                        <p><i class="uil uil-check-square"></i>100% Genuine Products</p>
                        <p><i class="uil uil-shield-check"></i>Secure Payments</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modalVoucher" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Promocode</h4>
            </div>
            <div class="modal-body">
                <input type="text" name="promocode" class="form-control" placeholder="Promocode">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>