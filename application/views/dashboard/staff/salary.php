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
                <?php
                if($this->session->userdata('ses_div') == "Owner"){
                ?>
                <section class="section">
                    <?php echo $this->session->flashdata('hore'); ?>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 style="color: #fff;">Data Gaji Staff</h2>
                            <br />
                            <a href="#" class="btn btn-success">Tambah Gaji untuk Staff</a>
                            <br />
                            <br />
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Staff</th>
                                                <th scope="col">Total Gaji</th>
                                                <th scope="col">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $a = 1;
                                            foreach($salary as $sala):
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $a++; ?></th>
                                                <td><?php echo $sala->nama_staff; ?></td>
                                                <td><?php echo rupiah($sala->total); ?></td>
                                                <td><button data-toggle="modal"
                                                        data-target="#<?php echo $sala->staff_id; ?>"
                                                        class="btn btn-info btn-small">Selengkapnya</button></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <?php $this->load->view('dashboard/staff/salary_modal'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
                }else{
                ?>
                <section class="section">
                    <h2 style="color: #fff;">Data Gaji Anda</h2>
                    <?php echo $this->session->flashdata('hore'); ?>
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <br />
                            <br />
                            <div class="card">
                                <?php
                                foreach($salarysa as $salarr):
                                ?>
                                <div class="card-body">
                                    <h2><?php echo rupiah($salarr->totala); ?></h2>
                                    <p>Total Gaji hingga bulan ini.</p>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <p><i>Gaji akan dicairkan melalui rekening yang telah Anda cantumkan pada menu
                                            Rekening.</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 mb-4">
                            <br />
                            <br />
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Gaji</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Nama Project</th>
                                                <th scope="col">Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $a = 1;
                                            foreach($salarys as $salar):
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $a++; ?></th>
                                                <td><?php echo rupiah($salar->total_salary); ?></td>
                                                <td><?php echo $salar->description; ?></td>
                                                <td><?php echo $salar->trans_name; ?></td>
                                                <td><?php echo format_indo($salar->salary_date); ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
                }
                ?>
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