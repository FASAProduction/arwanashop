<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $judul; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/vendors/owl-carousel/css/owl.theme.default.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/vendors/aos/css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/css/style.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/css/tambahan.css">
    <link rel="shorcut icon" href="<?php echo base_url(); ?>komponen/images/fav.png">
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    <header id="header-section">
        <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
            <div class="container">
                <div class="navbar-brand-wrapper d-flex w-100">
                    <img src="<?php echo base_url(); ?>komponen/images/ftlogo2.png" alt="" width="150" height="30">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-menu navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                        <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                            <div class="navbar-collapse-logo">
                                <img src="<?php echo base_url(); ?>komponen/images/ftlogo2.png" alt="" width="130"
                                    height="25">
                            </div>
                            <button class="navbar-toggler close-button" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#header-section">Beranda <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-section">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#products-section">Produk</a>
                        </li>
                        <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                            <a href="<?php echo base_url('client/auth/login'); ?>" class="btn btn-info">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="belakang">
        <div class="container">
            <h1 class="font-weight-semibold">Buat perusahaan Anda dikenal banyak orang.</h1>
            <h6 class="font-weight-normal text-muted pb-3">FasTechnology membantu Anda dan perusahaan Anda dikenal
                banyak orang dan
                meningkatkan profit perusahaan Anda.</h6>
            <div>
                <a href="<?php echo base_url('client'); ?>" class="btn btn-opacity-light mr-1">Mulai Sekarang</a>
                <a href="#about-section" class="btn btn-opacity-success ml-1">Discovery</a>
            </div>
            <img src="<?php echo base_url(); ?>komponen/images/Group171.svg" alt="" class="img-fluid">
        </div>
    </div>
    <div class="content-wrapper">
        <div class="container">
            <!--
            <section class="features-overview" id="features-section">
                <div class="content-header">
                    <h2>Bagaimana </h2>
                    <h6 class="section-subtitle text-muted">One theme that serves as an easy-to-use operational
                        toolkit<br>that meets customer's needs.</h6>
                </div>
                <div class="d-md-flex justify-content-between">
                    <div class="grid-margin d-flex justify-content-start">
                        <div class="features-width">
                            <img src="<?php echo base_url(); ?>komponen/images/Group12.svg" alt="" class="img-icons">
                            <h5 class="py-3">Speed<br>Optimisation</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                                consectetuer turpis, suspendisse.</p>
                            <a href="#">
                                <p class="readmore-link">Readmore</p>
                            </a>
                        </div>
                    </div>
                    <div class="grid-margin d-flex justify-content-center">
                        <div class="features-width">
                            <img src="<?php echo base_url(); ?>komponen/images/Group7.svg" alt="" class="img-icons">
                            <h5 class="py-3">SEO and<br>Backlinks</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                                consectetuer turpis, suspendisse.</p>
                            <a href="#">
                                <p class="readmore-link">Readmore</p>
                            </a>
                        </div>
                    </div>
                    <div class="grid-margin d-flex justify-content-end">
                        <div class="features-width">
                            <img src="<?php echo base_url(); ?>komponen/images/Group5.svg" alt="" class="img-icons">
                            <h5 class="py-3">Content<br>Marketing</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                                consectetuer turpis, suspendisse.</p>
                            <a href="#">
                                <p class="readmore-link">Readmore</p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
-->
            <section class="digital-marketing-service" id="about-section">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
                        <h3 class="m-0">Apa itu FasTechnology?</h3>
                        <div class="col-lg-7 col-xl-6 p-0">
                            <p class="py-4 m-0 text-muted">FasTechnology adalah sebuah holding company yang menaungi
                                beberapa brand seperti
                                FASAProduction, B.Jo Apparel dan FS Music.
                                <br />
                                FasTechnology sudah berdiri sejak 2018, yang pada awalnya sebagai perusahaan jasa
                                pembuatan
                                website.
                                Lalu pada tahun 2019, berdiri FASAProduction yang berfokus pada jasa tersebut, dan
                                FasTechnology berubah menjadi holding company.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
                        <img src="<?php echo base_url(); ?>komponen/images/Group1.png" alt="" class="img-fluid">
                    </div>
                </div>
                <br />
                <br />
            </section>
            <section class="case-studies" id="products-section">
                <div class="row grid-margin">
                    <div class="col-12 text-center pb-5">
                        <h2>Produk Kami</h2>
                        <h6 class="section-subtitle text-muted">Berikut list paket kami.</h6>
                    </div>
                    <?php
                    foreach($prod as $pr): 
                    ?>
                    <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
                        <div class="card color-cards">
                            <div class="card-body p-0">
                                <div class="bg-primary text-center card-contents">
                                    <div class="card-image">
                                        <img src="<?php echo base_url(); ?>komponen/images/Group95.svg"
                                            class="case-studies-card-img" alt="">
                                    </div>
                                    <div class="card-desc-box d-flex align-items-center justify-content-around">
                                        <div>
                                            <button class="btn btn-white" data-toggle="modal"
                                                data-target="#exampleModal<?php echo $pr->packet_id; ?>">Selengkapnya</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-details text-center pt-4">
                                    <h6 class="m-0 pb-1"><?php echo $pr->packet_name; ?></h6>
                                    <p>Mulai dari <?php echo rupiah($pr->price); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
            <!--
      <section class="customer-feedback" id="feedback-section">
        <div class="row">
          <div class="col-12 text-center pb-5">
            <h2>What our customers have to say</h2>
            <h6 class="section-subtitle text-muted m-0">Lorem ipsum dolor sit amet, tincidunt vestibulum.</h6>
          </div>
          <div class="owl-carousel owl-theme grid-margin">
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="<?php echo base_url(); ?>komponen/images/face2.jpg" width="89" height="89" alt=""
            class="img-customer">
            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer
                turpis, suspendisse.</p>
            <div class="content-divider m-auto"></div>
            <h6 class="card-title pt-3">Tony Martinez</h6>
            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
        </div>
    </div>
    </div>
    <div class="card customer-cards">
        <div class="card-body">
            <div class="text-center">
                <img src="<?php echo base_url(); ?>komponen/images/face3.jpg" width="89" height="89" alt=""
                    class="img-customer">
                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                    consectetuer turpis, suspendisse.</p>
                <div class="content-divider m-auto"></div>
                <h6 class="card-title pt-3">Sophia Armstrong</h6>
                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
            </div>
        </div>
    </div>
    <div class="card customer-cards">
        <div class="card-body">
            <div class="text-center">
                <img src="images/face20.jpg" width="89" height="89" alt="" class="img-customer">
                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                    consectetuer turpis, suspendisse.</p>
                <div class="content-divider m-auto"></div>
                <h6 class="card-title pt-3">Cody Lambert</h6>
                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
            </div>
        </div>
    </div>
    <div class="card customer-cards">
        <div class="card-body">
            <div class="text-center">
                <img src="images/face15.jpg" width="89" height="89" alt="" class="img-customer">
                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                    consectetuer turpis, suspendisse.</p>
                <div class="content-divider m-auto"></div>
                <h6 class="card-title pt-3">Cody Lambert</h6>
                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
            </div>
        </div>
    </div>
    <div class="card customer-cards">
        <div class="card-body">
            <div class="text-center">
                <img src="images/face16.jpg" width="89" height="89" alt="" class="img-customer">
                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                    consectetuer turpis, suspendisse.</p>
                <div class="content-divider m-auto"></div>
                <h6 class="card-title pt-3">Cody Lambert</h6>
                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
            </div>
        </div>
    </div>
    <div class="card customer-cards">
        <div class="card-body">
            <div class="text-center">
                <img src="images/face1.jpg" width="89" height="89" alt="" class="img-customer">
                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                    consectetuer turpis, suspendisse.</p>
                <div class="content-divider m-auto"></div>
                <h6 class="card-title pt-3">Tony Martinez</h6>
                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
            </div>
        </div>
    </div>
    <div class="card customer-cards">
        <div class="card-body">
            <div class="text-center">
                <img src="images/face2.jpg" width="89" height="89" alt="" class="img-customer">
                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                    consectetuer turpis, suspendisse.</p>
                <div class="content-divider m-auto"></div>
                <h6 class="card-title pt-3">Tony Martinez</h6>
                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
            </div>
        </div>
    </div>
    <div class="card customer-cards">
        <div class="card-body">
            <div class="text-center">
                <img src="images/face3.jpg" width="89" height="89" alt="" class="img-customer">
                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                    consectetuer turpis, suspendisse.</p>
                <div class="content-divider m-auto"></div>
                <h6 class="card-title pt-3">Sophia Armstrong</h6>
                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
            </div>
        </div>
    </div>
    <div class="card customer-cards">
        <div class="card-body">
            <div class="text-center">
                <img src="images/face20.jpg" width="89" height="89" alt="" class="img-customer">
                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus
                    consectetuer turpis, suspendisse.</p>
                <div class="content-divider m-auto"></div>
                <h6 class="card-title pt-3">Cody Lambert</h6>
                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
            </div>
        </div>
    </div>
    </div>
    </div>
    </section>
    -->
            <?php
    foreach($prod as $pro): 
    ?>
            <div class="modal fade" id="exampleModal<?php echo $pro->packet_id; ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel"><?php echo $pro->packet_name; ?></h4>
                        </div>
                        <div class="modal-body">
							<?php
							if($pro->description == null){
							?>
                            Deskripsi: Tidak ada deskripsi.
							<?php }else{ ?>
							Deskripsi: <?php echo $pro->description; ?>
							<?php } ?>
                            <br />
                            <br />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
							<a class="btn btn-primary" href="<?php echo base_url('client/auth/login'); ?>">Ambil Paket</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <section class="contact-us" id="contact-section">
                <div class="contact-us-bgimage grid-margin">
                    <div class="pb-4">
                        <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Anda punya project?</h4>
                    </div>
                    <div data-aos="fade-up">
                        <a href="<?php echo base_url('client/auth/create'); ?>"
                            class="btn btn-rounded btn-outline-danger">Buat akun sekarang!</a>
                    </div>
                </div>
            </section>
            <footer class="border-top">
                <p class="text-center text-muted pt-4">Copyright © <?php echo date('Y'); ?> FasTechnology Indonesia.
                    Under PT. Insane
                    Technology Indonesia. All rights reserved.</p>
            </footer>

        </div>
    </div>
    <script src="<?php echo base_url(); ?>komponen/vendors/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>komponen/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>komponen/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>komponen/vendors/aos/js/aos.js"></script>
    <script src="<?php echo base_url(); ?>komponen/js/landingpage.js"></script>
</body>

</html>