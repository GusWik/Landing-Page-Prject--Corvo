<div class="body__overlay"></div>
<!-- cart-main-area start -->
<div class="cart-main-area ptb--100 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <?php echo $this->session->flashdata('msgbox') ?>
                             
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Produk</th>
                                    <th class="product-name">Nama Produk</th>
                                    <th class="product-price">Harga</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $subTotal = 0;
                                foreach($dataCart as $key => $Vcart){
                                    $harganya = $Vcart->qty * $Vcart->harga;
                                    $subTotal += $harganya;
                                    ?>
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="<?= base_url($Vcart->gambar)?>" alt="product img" /></a></td>
                                    <td class="product-name"><a href="#"><?= $Vcart->nama_produk?></a></td>
                                    <td class="product-price"><span class="amount">Rp. <?= number_format($Vcart->harga)?></span></td>
                                    <td class="product-subtotal"><?= $Vcart->qty?></td>
                                    <td class="product-subtotal">Rp. <?= number_format($harganya)?></td>
                                    <td class="product-remove"><a href="<?= base_url('front/dashboard/deleteCart/').$Vcart->cart_id;?>"><i class="icon-trash icons"></i></a></td>
                                </tr>
                                <?php }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="product-subtotal">Total</td>
                                    <td colspan="" class="product-subtotal">Rp. <?= number_format($subTotal)?></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="ht__coupon__code">
                                <span>Kode Voucher</span>
                                <form action="<?= base_url('front/dashboard/cart')?>" method="get">  
                                    <div class="coupon__box">
                                        <input type="text" placeholder="Masukan Kode Voucher" id="voucher" name="voucher" value="<?php if($_GET){ echo $_GET['voucher'];}?>">
                                        <div class="ht__cp__btn">
                                            <button type="submit" class="btn btn-default btn-lg" style="background: #ebebeb none repeat scroll 0 0;color: #3f3f3f;display: block;font-family: 'Poppins', sans-serif;font-weight: 500;text-align: center;text-transform: uppercase;transition: all 0.4s ease 0s;">Enter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                            <div class="htc__cart__total">
                                <h6>cart total</h6>
                                <div class="cart__desk__list">
                                    <ul class="cart__desc">
                                        <li>Total Belanja</li>
                                        <li>Potongan Harga</li>
                                    </ul>
                                    <ul class="cart__price">
                                        <li>Rp. <?= number_format($subTotal)?></li>
                                        <?php 
                                        if($_GET){
                                            if(!empty($kodeVoucher)){
                                                if($kodeVoucher->type_diskon == 1){
                                                    $diskonnya = $kodeVoucher->potongan_diskon;
                                                }else{
                                                    $diskonnya = ($subTotal * $kodeVoucher->potongan_diskon) / 100;

                                                }
                                            }else{
                                                $diskonnya = 0;
                                            }
                                            $totalHarga = $subTotal - $diskonnya;
                                            ?>
                                            <li>Rp. <?= number_format($diskonnya)?></li>
                                        <?php 
                                        }else{
                                            $totalHarga = $subTotal; ?>
                                            <li>0</li>
                                        <?php 
                                        } ?>
                                    </ul>
                                </div>
                                <?php if(!empty($kodeVoucher)){ ?>
                                <p style="font-family: 'Poppins', sans-serif;font-size: 14px;">Kamu Hemat (Rp. <?= number_format($diskonnya)?>)</p>
                                <?php }?>
                                <div class="cart__total">
                                    <span>order total</span>
                                    <?php if($_GET){ ?>
                                        <span>Rp. <?= number_format($totalHarga)?></span>
                                    <?php }else{?>
                                        <span>Rp. <?= number_format($totalHarga)?></span>
                                    <?php }?>
                                </div>
                                <ul class="payment__btn">
                                    <li class="active"><a href="#modalCheckout" data-toggle="modal">checkout</a></li>
                                    <li><a href="<?= base_url('front/dashboard/produk');?>">Continue Shopping</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-main-area end -->

<!-- OPEN MODAL -->
<div id="modalCheckout" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Alamat Pengiriman</h4>
            </div>
            <form method="post" action="<?= base_url('front/dashboard/addTransaksi')?>">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" name="no_hp" placeholder="No Handphone" class="form-control">
                </div>
                <div class="form-group">
                    <input type="hidden" name="total_harga" value="<?= $totalHarga?>">
                    <input type="hidden" name="id_voucher" value="<?= $kodeVoucher->voucher_id?>">
                    <input type="hidden" name="diskon" value="<?= $diskonnya?>">
                    <textarea name="alamat" placeholder="Alamat Pengiriman" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Checkout</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>

    </div>
</div>
<!-- END MODAL -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
