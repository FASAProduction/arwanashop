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
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>komponen/assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/css/khususfoto.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/css/animasi.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>komponen/assets/images/favicon.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet"
        type="text/css" />

    <script src="https://use.fontawesome.com/bb21722b54.js"></script>

    <style>
    .for-cekot {
        border-radius: 25px 0px 0px 25px;
        box-shadow: 0px 0px 6px 1px #b0b0b0;
        width: 210px;
        margin: 0px 0px 0px 504px;
        color: #fff;
        background-color: #36c3ee;
        padding: 9px 6px 1px 14px;
    }

    .for-cekot-kanan {
        border-radius: 0px 25px 25px 0px;
        box-shadow: 0px 0px 6px 1px #b0b0b0;
        width: 169px;
        margin: -52px 0px 0px 713px;
        color: #fff;
        background-color: #02c144;
        padding: 10px 6px 1px 14px;
    }
    </style>

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
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header order-box">
                                        <h5 class="card-title">Keranjang Saya</h5>
                                        <a class="kanann btn btn-success" href="#" data-bs-toggle="modal"
                                            data-bs-target="#add">Tambah
                                            Pesanan</a>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="table-tab" data-bs-toggle="tab"
                                                    href="#table" role="tab" aria-controls="home"
                                                    aria-selected="true">Table List</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="card-tab" data-bs-toggle="tab" href="#card"
                                                    role="tab" aria-controls="profile" aria-selected="false">Card
                                                    List</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="table" role="tabpanel"
                                                aria-labelledby="table-tab">
                                                <?php $this->load->view('dashboard/transaction/cart/table_mode'); ?>
                                            </div>
                                            <div class="tab-pane fade" id="card" role="tabpanel"
                                                aria-labelledby="card-tab">
                                                <?php $this->load->view('dashboard/transaction/cart/card_mode'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>

                <?php $this->load->view('dashboard/transaction/fp/add_orders_modal'); ?>
                <?php $this->load->view('dashboard/transaction/cart/add_details_modal'); ?>
                <?php $this->load->view('dashboard/transaction/cart/edit_details_modal'); ?>
                <?php $this->load->view('dashboard/transaction/cart/details_modal'); ?>

                <?php $this->load->view('dashboard/menu/footer'); ?>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>komponen/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>komponen/assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url(); ?>komponen/assets/js/mazer.js"></script>
    <script src="<?php echo base_url(); ?>komponen/assets/vendors/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>komponen/assets/vendors/jquery-datatables/jquery.dataTables.min.js"></script>
    <script
        src="<?php echo base_url(); ?>komponen/assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js">
    </script>

    <script>
    let jquery_datatable = $("#table1").DataTable()
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js">
    </script>
    <script>
    var editor = new FroalaEditor('#example')
    </script>
</body>

</html>
<?php endforeach; ?>