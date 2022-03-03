<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo $judul; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/css/components.css">
    <style>
    .nganan {
        margin-left: 161px;
        margin-top: -62px;
    }
    </style>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <?php $this->load->view('dashboard/menu/top_bar'); ?>
            <div class="main-sidebar">
                <?php $this->load->view('dashboard/menu/sidebar'); ?>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <h2 style="color: #fff;">Data Staff</h2>
                    <?php echo $this->session->flashdata('hore'); ?>
                    <br />
                    <br />
                    <div class="row">
                        <?php
                        foreach($staffsan as $ssan):
                        ?>
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="<?php echo base_url(); ?>komponen/img/team/<?php echo $ssan->fotos; ?>"
                                        width="100%" />
                                    <br />
                                    <br />
                                    <center>
                                        <h4><?php echo $ssan->nama_staff; ?></h4>
                                        <hr />
                                        <p><?php echo $ssan->divisi; ?></p>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            </div>
            <?php $this->load->view('dashboard/menu/footer'); ?>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>komponen/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="<?php echo base_url(); ?>komponen/js/scripts.js"></script>
    <script src="<?php echo base_url(); ?>komponen/js/custom.js"></script>
</body>

</html>