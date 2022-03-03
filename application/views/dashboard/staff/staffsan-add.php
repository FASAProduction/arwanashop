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
                    <div class="col-md-6">
                        <?php
                        foreach($staff as $stafs):
                        ?>
                        <div class="hero text-white hero-bg-image hero-bg-parallax"
                            data-background="<?php echo base_url(); ?>komponen/img/team/<?php echo $stafs->fotos; ?>">
                            <?php endforeach; ?>
                            <div class="hero-inner">
                                <h2>Tambah data staff</h2>
                                <br />
                                <form action="<?php echo base_url('index.php/add_staff/add'); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" name="nama_staff" id="nama" class="form-control"
                                            placeholder="Nama Staff" onkeyup="unaa()" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control"
                                            placeholder="Email Staff" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="divisi">
                                            <option value="">-- Pilih divisi --</option>
                                            <option value="Programmer">Programmer</option>
                                            <option value="System Analyst">System Analyst</option>
                                            <option value="Graphic Designer">Graphic Designer</option>
                                            <option value="Website Designer">Website Designer</option>
                                            <option value="Public Relations">Public Relations</option>
                                            <option value="Customer Service">Customer Service</option>
                                            <option value="Administration">Administration</option>
                                            <option value="Finance">Finance</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="uname" class="form-control"
                                            placeholder="Username Staff" id="unamaa" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass" class="form-control"
                                            placeholder="Password Staff" id="passw" />
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="fotos" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success btn-block" type="submit">Go!</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php
                         
                        ?>
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

    <script>
    function unaa() {
        var qw = document.getElementById("nama").value;
        var d = qw.toLowerCase();
        var n = d.replace(/\s/g, "");
        var f = n.substr(0, 9);
        var g = document.getElementById("unamaa").value = f;
        var h = document.getElementById("passw").value = f;
    }
    </script>
</body>

</html>