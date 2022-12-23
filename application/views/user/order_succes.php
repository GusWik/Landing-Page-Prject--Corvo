<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
<div class="wrapper">
	<div class="all-product-grid">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-8">
					<div class="order-placed-dt">
						<span class="iconify icon-circle" data-icon="uil:check-circle"></span>
						<h2>Order Successfully Placed</h2>
						<p>Thank you for your order! will received order timing - <span>(<?= tgl_indo($detailTransaksi->tgl_pengiriman)?>, <?= $detailTransaksi->jam_pengiriman?>)</span></p>
						<div class="delivery-address-bg">
							<div class="title585">
								<div class="pln-icon"><i class="uil uil-telegram-alt"></i></div>
								<h4>Your order will be sent to this address</h4>
							</div>
							<ul class="address-placed-dt1">
								<li><p><i class="uil uil-map-marker-alt"></i>Address :<span><?= $detailTransaksi->alamat_rumah?></span></p></li>
								<li><p><i class="uil uil-phone-alt"></i>Phone Number :<span><?= $detailTransaksi->no_telp_pembeli?></span></p></li>
								<li><p><i class="uil uil-card-atm"></i>Payment Method :<span><?php if($detailTransaksi->payment_method == 'cashondelivery'){ echo 'Cash On Delivery';}else{echo 'Transfer';}?></span></p></li>
							</ul>
							<div class="stay-invoice">
								<div class="st-hm">Stay Home <span class="iconify" data-icon="uil:smile"></span></div><
								<!--
								<a href="#" class="invc-link hover-btn">invoice</a>
							-->
							</div>
							<div class="placed-bottom-dt">
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>