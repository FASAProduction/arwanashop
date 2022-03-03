<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $judul; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>komponen/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>komponen/assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>komponen/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>komponen/assets/css/nice-select.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>komponen/assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>komponen/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>komponen/assets/css/main-color.css">

</head>

<body class="biolife-body">

    <!-- Preloader -->
    <div id="biof-loading">
        <div class="biof-loading-center">
            <div class="biof-loading-center-absolute">
                <div class="dot dot-one"></div>
                <div class="dot dot-two"></div>
                <div class="dot dot-three"></div>
            </div>
        </div>
    </div>

    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03">
        <div class="header-top bg-main hidden-xs">
            <div class="container">
                <div class="top-bar left">
                    <ul class="horizontal-menu">
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>Organic@company.com</a></li>
                        <li><a href="#">Free Shipping for all Order of $99</a></li>
                    </ul>
                </div>
                <div class="top-bar right">
                    <ul class="social-list">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="horizontal-menu">
                        <li><a href="login.html" class="login-link"><i
                                    class="biolife-icon icon-login"></i>Login/Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-middle biolife-sticky-object ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                        <a href="index-2.html" class="biolife-logo"><img
                                src="<?php echo base_url(); ?>komponen/assets/images/organic-3.png" alt="biolife logo"
                                width="135" height="34"></a>
                    </div>
                    <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                        <div class="primary-menu">
                            <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu"
                                data-menuname="main menu">
                                <li class="menu-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li class="menu-item menu-item-has-children has-child">
                                    <a href="#" class="menu-name" data-title="Products">Produk</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="#">Omelettes</a></li>
                                        <li class="menu-item"><a href="#">Breakfast Scrambles</a></li>
                                        <li class="menu-item menu-item-has-children has-child"><a href="#"
                                                class="menu-name" data-title="Eggs & other considerations">Eggs & other
                                                considerations</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="#">Classic Breakfast</a></li>
                                                <li class="menu-item"><a href="#">Huevos Rancheros</a></li>
                                                <li class="menu-item"><a href="#">Everything Egg Sandwich</a></li>
                                                <li class="menu-item"><a href="#">Egg Sandwich</a></li>
                                                <li class="menu-item"><a href="#">Vegan Burrito</a></li>
                                                <li class="menu-item"><a href="#">Biscuits and Gravy</a></li>
                                                <li class="menu-item"><a href="#">Bacon Avo Egg Sandwich</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="#">Griddle</a></li>
                                        <li class="menu-item menu-item-has-children has-child"><a href="#"
                                                class="menu-name" data-title="Sides & Extras">Sides & Extras</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="#">Breakfast Burrito</a></li>
                                                <li class="menu-item"><a href="#">Crab Cake Benedict</a></li>
                                                <li class="menu-item"><a href="#">Corned Beef Hash</a></li>
                                                <li class="menu-item"><a href="#">Steak & Eggs</a></li>
                                                <li class="menu-item"><a href="#">Oatmeal</a></li>
                                                <li class="menu-item"><a href="#">Fruit & Yogurt Parfait</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="#">Biscuits</a></li>
                                        <li class="menu-item"><a href="#">Seasonal Fruit Plate</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                        <div class="biolife-cart-info">
                            <div class="mobile-search">
                                <a href="javascript:void(0)" class="open-searchbox"><i
                                        class="biolife-icon icon-search"></i></a>
                                <div class="mobile-search-content">
                                    <form action="#" class="form-search" name="mobile-seacrh" method="get">
                                        <a href="#" class="btn-close"><span
                                                class="biolife-icon icon-close-menu"></span></a>
                                        <input type="text" name="s" class="input-text" value=""
                                            placeholder="Search here...">
                                        <button type="submit" class="btn-submit">go</button>
                                    </form>
                                </div>
                            </div>
                            <div class="minicart-block">
                                <div class="minicart-contain">
                                    <a href="#" class="link-to">
                                        <span class="icon-qty-combine">
                                            <i class="icon-cart-mini biolife-icon"></i>
                                            <span class="qty">8</span>
                                        </span>
                                        <span class="title">My Cart -</span>
                                        <span class="sub-total">$0.00</span>
                                    </a>
                                </div>
                            </div>
                            <div class="mobile-menu-toggle">
                                <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                    </div>
                    <div class="col-lg-9 col-md-8 padding-top-2px">
                        <div class="header-search-bar layout-01">
                            <form action="#" class="form-search" name="desktop-seacrh" method="get">
                                <input type="text" name="s" class="input-text" value="" placeholder="Search here...">
                                <button type="submit" class="btn-submit"><i
                                        class="biolife-icon icon-search"></i></button>
                            </form>
                        </div>
                        <div class="live-info">
                            <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b
                                    class="phone-number">(+900) 123 456 7891</b></p>
                            <p class="working-time">Mon-Fri: 8:30am-7:30pm; Sat-Sun: 9:30am-4:30pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <!--Block 01: Main slide-->

            <!--Block 02: Banner-->
            <div class="special-slide">
                <div class="container">
                    <ul class="biolife-carousel dots_ring_style"
                        data-slick='{"arrows": false, "dots": true, "slidesMargin": 30, "slidesToShow": 1, "infinite": true, "speed": 800, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 1}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":20, "dots": false}},{"breakpoint":480, "settings":{ "slidesToShow": 1}}]}'>
                        <li>
                            <div class="slide-contain biolife-banner__special">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="#" class="bn-link">
                                            <figure><img
                                                    src="<?php echo base_url(); ?>komponen/assets/images/home-03/bn_special_org.jpg"
                                                    width="616" height="483" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="text-content">
                                        <b class="first-line">Pomegranate</b>
                                        <span class="second-line">Organic Heaven Made</span>
                                        <span class="third-line">Easy <i>Healthy, Happy Life</i></span>
                                        <div class="product-detail">
                                            <h4 class="product-name">National Fresh Fruit Production</h4>
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span
                                                            class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span
                                                            class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="btn add-to-cart-btn">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slide-contain biolife-banner__special">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="#" class="bn-link">
                                            <figure><img src="assets/images/home-03/bn_special_org.jpg" width="616"
                                                    height="483" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="text-content">
                                        <b class="first-line">Pomegranate</b>
                                        <span class="second-line">Organic Heaven Made</span>
                                        <span class="third-line">Easy <i>Healthy, Happy Life</i></span>
                                        <div class="product-detail">
                                            <h4 class="product-name">National Fresh Fruit Production</h4>
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span
                                                            class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span
                                                            class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="btn add-to-cart-btn">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slide-contain biolife-banner__special">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="#" class="bn-link">
                                            <figure><img src="assets/images/home-03/bn_special_org.jpg" width="616"
                                                    height="483" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="text-content">
                                        <b class="first-line">Pomegranate</b>
                                        <span class="second-line">Organic Heaven Made</span>
                                        <span class="third-line">Easy <i>Healthy, Happy Life</i></span>
                                        <div class="product-detail">
                                            <h4 class="product-name">National Fresh Fruit Production</h4>
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span
                                                            class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span
                                                            class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="btn add-to-cart-btn">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slide-contain biolife-banner__special">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="#" class="bn-link">
                                            <figure><img src="assets/images/home-03/bn_special_org.jpg" width="616"
                                                    height="483" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="text-content">
                                        <b class="first-line">Pomegranate</b>
                                        <span class="second-line">Organic Heaven Made</span>
                                        <span class="third-line">Easy <i>Healthy, Happy Life</i></span>
                                        <div class="product-detail">
                                            <h4 class="product-name">National Fresh Fruit Production</h4>
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span
                                                            class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span
                                                            class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="btn add-to-cart-btn">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="biolife-service type01 biolife-service__type01 sm-margin-top-0 xs-margin-top-45px">
                        <b class="txt-show-01">100%Nature</b>
                        <i class="txt-show-02">Fresh Fruits</i>
                        <ul class="services-list">
                            <li>
                                <div class="service-inner">
                                    <span class="number">1</span>
                                    <span class="biolife-icon icon-beer"></span>
                                    <a class="srv-name" href="#">full stamped product</a>
                                </div>
                            </li>
                            <li>
                                <div class="service-inner">
                                    <span class="number">2</span>
                                    <span class="biolife-icon icon-schedule"></span>
                                    <a class="srv-name" href="#">place and delivery on time</a>
                                </div>
                            </li>
                            <li>
                                <div class="service-inner">
                                    <span class="number">3</span>
                                    <span class="biolife-icon icon-car"></span>
                                    <a class="srv-name" href="#">Free shipping in the city</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--Block 03: Product Tab-->
            <div class="product-tab z-index-20 sm-margin-top-193px xs-margin-top-30px">
                <div class="container">
                    <div class="biolife-title-box">
                        <span class="subtitle">All the best item for You</span>
                        <h3 class="main-title">Related Products</h3>
                    </div>
                    <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
                        <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                            <ul class="tabs md-margin-bottom-35-im xs-margin-bottom-40-im">
                                <li class="tab-element active">
                                    <a href="#tab01_1st" class="tab-link"><span
                                            class="biolife-icon icon-lemon"></span>Oranges</a>
                                </li>
                                <li class="tab-element">
                                    <a href="#tab01_2nd" class="tab-link"><span
                                            class="biolife-icon icon-grape2"></span>Grapes</a>
                                </li>
                                <li class="tab-element">
                                    <a href="#tab01_3rd" class="tab-link"><span
                                            class="biolife-icon icon-blueberry"></span>Blueberries</a>
                                </li>
                                <li class="tab-element">
                                    <a href="#tab01_4th" class="tab-link"><span
                                            class="biolife-icon icon-orange"></span>Lemon</a>
                                </li>
                                <li class="tab-element">
                                    <a href="#tab01_5th" class="tab-link"><span
                                            class="biolife-icon icon-broccoli"></span>Vegetables</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="tab01_1st" class="tab-contain active">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                                    data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass
                                                        Avocado, Large</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-07.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers
                                                        of Lemons</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-02.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers
                                                        Magnetic Salt</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-03.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Passover
                                                        Cauliflower Kugel</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-06.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Packham's
                                                        Pears</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-20.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh
                                                        Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-19.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins
                                                        Fairytale</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass
                                                        Avocado</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-22.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato
                                                        Seeds</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-18.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh
                                                        Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab01_2nd" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                                    data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>

                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass
                                                        Avocado, Large</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-07.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers
                                                        of Lemons</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-02.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers
                                                        Magnetic Salt</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-20.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh
                                                        Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-19.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins
                                                        Fairytale</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-03.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Passover
                                                        Cauliflower Kugel</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-18.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh
                                                        Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-06.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Packham's
                                                        Pears</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass
                                                        Avocado</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-22.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato
                                                        Seeds</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div id="tab01_3rd" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                                    data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>

                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass
                                                        Avocado, Large</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-02.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers
                                                        Magnetic Salt</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass
                                                        Avocado</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-06.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Packham's
                                                        Pears</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-07.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers
                                                        of Lemons</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-18.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh
                                                        Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-20.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh
                                                        Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-22.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato
                                                        Seeds</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-19.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins
                                                        Fairytale</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-03.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Passover
                                                        Cauliflower Kugel</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div id="tab01_4th" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                                    data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>

                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-20.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh
                                                        Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass
                                                        Avocado, Large</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-22.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato
                                                        Seeds</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-07.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers
                                                        of Lemons</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-02.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers
                                                        Magnetic Salt</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass
                                                        Avocado</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-03.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Passover
                                                        Cauliflower Kugel</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-18.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh
                                                        Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-19.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins
                                                        Fairytale</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-06.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Packham's
                                                        Pears</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab01_5th" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                                    data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>

                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-20.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh
                                                        Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-22.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato
                                                        Seeds</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass
                                                        Avocado, Large</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-02.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers
                                                        Magnetic Salt</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-07.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers
                                                        of Lemons</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-03.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Passover
                                                        Cauliflower Kugel</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass
                                                        Avocado</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-19.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins
                                                        Fairytale</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-06.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Packham's
                                                        Pears</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-18.jpg" alt="Vegetables"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i
                                                        class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh
                                                        Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure
                                                        food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                                aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>