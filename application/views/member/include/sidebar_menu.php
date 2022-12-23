<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/dashboard/') ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                </li>

                <?php if($this->session->loginData['Role'] == "admin"){ ?>
                    <!--
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/user/') ?>" aria-expanded="false">
                            <i class="mdi mdi-account"></i><span class="hide-menu">Data User</span>
                        </a>
                    </li>
                    -->

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/kategori/') ?>" aria-expanded="false">
                            <i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Data Kategori</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/produk/') ?>" aria-expanded="false">
                            <i class="mdi mdi-notification-clear-all"></i><span class="hide-menu">Data Produk</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/voucher/') ?>" aria-expanded="false">
                            <i class="mdi mdi-book-multiple"></i><span class="hide-menu">Data Voucher</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/kurir/') ?>" aria-expanded="false">
                            <i class="mdi mdi-airplay"></i><span class="hide-menu">Data Kurir</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/pesanan/') ?>" aria-expanded="false">
                            <i class="mdi mdi-nature"></i><span class="hide-menu">Data Pesanan</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/laporan/') ?>" aria-expanded="false">
                            <i class="mdi mdi-content-paste"></i><span class="hide-menu">Laporan</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>