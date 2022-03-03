<?php
foreach($cust as $cst):
?>
<header class='mb-3'>
    <nav class="navbar navbar-expand navbar-light ">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link active" href="<?php echo base_url('client/cart'); ?>" aria-expanded="false">
                            <?php
                            $cu = $this->session->userdata('ses_id');
                            $f = $this->db->query("SELECT * FROM keranjang WHERE cust_id='$cu'")->num_rows();
                            if($f > 0){
                            ?>
                            <i class='bi bi-cart-fill bi-sub fs-4 text-gray-600'></i>
                            <?php }else{ ?>
                            <i class='bi bi-cart bi-sub fs-4 text-gray-600'></i>
                            <?php } ?>
                        </a>
                    </li>
                </ul>
                <!--
                <div class="fastpay">
                    <img src="<?php echo base_url(); ?>komponen/assets/images/fastpay.png" width="30%"
                        class="kuanana" />
                    <div class="kotak-putih">
                        <h5 class="angka">1.000.000</h5>
                    </div>
                    <img src="<?php echo base_url(); ?>komponen/assets/images/rupiah.png" width="15%" class="kiri" />
                </div>
-->
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600"><?php echo $cst->first_name . " " . $cst->last_name; ?>
                                </h6>
                                <p class="mb-0 text-sm text-gray-600">Regular Customer</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <?php
                                if($cst->pict == null){
                                    $nd = substr($cst->first_name,0,1);
                                    $nb = substr($cst->last_name,0,1);
                                ?>
                                <div class="avatar bg-warning me-3 avatar-lg">
                                    <span class="avatar-content"><?php echo $nd."".$nb; ?></span>
                                </div>
                                <?php }else{ ?>
                                <div class="avatar avatar-md">
                                    <img
                                        src="<?php echo base_url(); ?>komponen/assets/images/cust/<?php echo $cst->pict; ?>" />
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                        style="min-width: 11rem;">
                        <li>
                            <h6 class="dropdown-header">Halo, <?php echo $cst->uname; ?>!</h6>
                        </li>
                        <li><a class="dropdown-item" href="<?php echo base_url('client/my'); ?>"><i
                                    class="icon-mid bi bi-person me-2"></i> My
                                Profile</a></li>
                        <!--
                        <li><a class="dropdown-item" href="<?php echo base_url('client/settings'); ?>"><i
                                    class="icon-mid bi bi-gear me-2"></i>
                                Settings</a></li>
                                -->
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?php echo base_url('client/auth/logout'); ?>"><i
                                    class="icon-mid bi bi-box-arrow-left me-2"></i>
                                Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php endforeach; ?>