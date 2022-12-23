<div class="wrapper">
	<div class="gambo-Breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= base_url('front/dashboard');?>">Home</a></li>
							<li class="breadcrumb-item"><a href="shop_grid.html">Vegetables & Fruits</a></li>
							<li class="breadcrumb-item active" aria-current="page">Product Title</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="all-product-grid">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="product-dt-view">
						<div class="row">
							<div class="col-lg-4 col-md-4">
								
									<img src="<?= base_url().$detailProduk->gambar;?>" alt="" style="width: -webkit-fill-available;">
								</div>
							<div class="col-lg-8 col-md-8">
								<div class="product-dt-right">
									<h2><?= $detailProduk->nama_produk?></h2>
									<div class="no-stock">
										<p class="pd-no">Product No.<span><?= $detailProduk->kode_produk?></span></p>
									</div>
									<p class="pp-descp"><?= $detailProduk->deskripsi?></p>
									<div class="product-group-dt">
										<ul>
											<li><div class="main-price color-discount">Harga<span><?= number_format($detailProduk->harga)?></span></div></li>
										</ul>
										<form method="post" action="<?= base_url('front/dashboard/addCart/');?>"">
											<ul class="gty-wish-share">
												<li>
													<div class="qty-product">
														<div class="quantity buttons_added">
															<input type="hidden" name="id_produk" value="<?= $detailProduk->produk_id?>">
															<input type="button" value="-" class="minus minus-btn">
															<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
															<input type="button" value="+" class="plus plus-btn">
														</div>
													</div>
												</li>
												<li><span class="like-icon save-icon" title="wishlist"></span></li>
											</ul>
											<ul class="ordr-crt-share">
												<li><button type="submit" class="add-cart-btn hover-btn"><i class="uil uil-shopping-cart-alt"></i>Add to Cart</button></li>
												<li><button class="order-btn hover-btn">Order Now</button></li>
											</ul>
										</form>
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