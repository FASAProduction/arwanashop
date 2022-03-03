<?php
foreach($cust as $cst):
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul; ?></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/css/bootstrap.css">

    <link rel="stylesheet"
        href="<?php echo base_url(); ?>komponen/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/css/khususfoto.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/css/animasi.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>komponen/assets/images/favicon.svg" type="image/x-icon">

</head>

<body>
    <div id="app">
        <?php $this->load->view('dashboard/menu/sidebar_2.php'); ?>
        <div id="main" class='layout-navbar'>
            <?php $this->load->view('dashboard/menu/top_bar'); ?>
            <div id="main-content">

                <div class="page-heading">

                    <section class="section">
                        <div class="row">
                            <div class="col-md-4">
                                <?php
                                if($cst->pict == null){
                                ?>
                                <img src="<?php echo base_url(); ?>komponen/assets/images/user-fastech.jpg" class="fto"
                                    width="100%" />
                                <?php }else{ ?>
                                <img src="<?php echo base_url(); ?>komponen/assets/images/cust/<?php echo $cst->pict; ?>"
                                    class="fto" width="100%" />
                                <?php } ?>

                            </div>
                            <?php
                            if($cst->country == "Japan"){
                                $sambutan = $cst->first_name . "-san";
                            }else{
                                $sambutan = $cst->first_name;
                            }
                            ?>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header order-box">
                                        <h4 class="card-title">Selamat Datang, <?php echo $sambutan; ?>!</h4>
                                    </div>
                                    <div class="card-body">
                                        Ini adalah portal Anda. Anda bisa memesan produk dan jasa kami sesuai dengan
                                        brand yang kami miliki.
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header order-box">
                                        <h4 class="card-title">Statistik Pemesanan Anda</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <i>Coming Soon.</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <footer>
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2021 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                                by <a href="https://ahmadsaugi.com">Saugi</a></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>komponen/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>komponen/assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url(); ?>komponen/assets/js/mazer.js"></script>
</body>

</html>
<?php endforeach; ?>