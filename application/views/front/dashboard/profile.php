<div class="body__overlay"></div>
<!-- Start Contact Area -->
<section class="htc__contact__area bg__white">
    <div class="container">
        <div class="row">
            <div class="contact-form-wrap mt--60">
                <div class="col-xs-12">
                    <div class="contact-title">
                        <h2 class="title__line--6">Profile</h2>
                    </div>
                </div>
                <div class="col-xs-12">
                    <form id="contact-form" action="<?= base_url('front/dashboard/updateProfile');?>" method="post">
                        <div class="single-contact-form">
                            <div class="contact-box subject">
                                <input type="text" name="name" placeholder="Nama" value="<?= $detailData->customer?>">
                            </div>
                        </div>
                        <div class="single-contact-form">
                            <div class="contact-box name">
                                <input type="text" name="no_hp" placeholder="No HP" value="<?= $detailData->no_hp?>">
                                <input type="email" name="email" placeholder="Email" value="<?= $detailData->email?>">
                            </div>
                        </div>
                        <div class="single-contact-form">
                            <div class="contact-box subject">
                                <input type="text" name="alamat" placeholder="Alamat" value="<?= $detailData->alamat?>">
                            </div>
                        </div>
                        <div class="contact-btn">
                            <button type="submit" class="fv-btn">Register</button>
                        </div>
                    </form>
                    <div class="form-output">
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
<!-- End Contact Area -->