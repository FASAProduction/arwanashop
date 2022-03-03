<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/css/pages/auth.css">
    <link rel="shorcut icon" href="<?php echo base_url(); ?>komponen/images/fav.png">
    <style>
    .kartu {
        width: 849px;
        height: 550px;
        border-radius: 24px 24px;
        box-shadow: 0px 1px 13px 4px #b9b9b9;
        padding: 22px 32px 27px 29px;
        margin: 62px 0px 0px -220px;
        background: url('<?php echo base_url(); ?>komponen/assets/images/bg/wadaw.jpg');
        background-size: cover;
        animation: zoomIn;
        animation-duration: 1s;

    }

    .kanan {
        margin: -22px 0px -248px 350px;
        position: relative;
        border-radius: 0px 24px 0px 0px;
    }

    .kanan-juga {
        margin: -33px 0px -110px 620px;
        position: relative;
        font-size: 25px;
    }

    .kotack {
        width: 300px;
        animation: flipInY;
        animation-duration: 2s;
        margin: 24px 0px -96px 487px;
    }

    .kotack-juga {
        width: 300px;
        animation: flipInY;
        animation-duration: 2s;
        margin: 16px 0px -96px 487px;
    }

    .satu {
        margin: 0px 0px 0px 0px;
    }

    .dua {
        margin: 101px 0px 0px 0px;
    }

    .tiga {
        margin: 0px 0px 0px 0px;
    }
    </style>
</head>

<body style="background: url('<?php echo base_url(); ?>komponen/assets/images/bg/bege.jpg');">
    <div id="auth">

        <div class="row h-100">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="kartu">
                    <div class="auth-logo">
                        <a href="<?php echo base_url(); ?>"><img
                                src="<?php echo base_url(); ?>komponen/assets/images/logo/flogo.png" alt="Logo"
                                width="30%"></a>
                    </div>
                    <br />
                    <br />
                    <?php
                    if($this->session->flashdata('msg')){
                    ?>
                    <div class="kotack">
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('msg'); ?></div>
                    </div>
                    <?php }
                    if($this->session->flashdata('yeay')){
                    ?>
                    <div class="kotack-juga">
                        <?php echo $this->session->flashdata('yeay'); ?>
                    </div>
                    <?php } ?>
                    <h1 class="auth-title">Masuk.</h1>
                    <p class="auth-subtitle mb-2">Masuk dengan username yang Anda daftarkan di FasTechnology.</p>

                    <form action="<?php echo base_url('client/auth/pro'); ?>" method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="username" class="form-control form-control-xl"
                                placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl"
                                placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-1">Log in</button>
                    </form>
                    <div class="text-center mt-3 text-lg fs-4">
                        <p class="text-gray-600">Belum Punya Akun? <a
                                href="<?php echo base_url('client/auth/create'); ?>" class="font-bold">Buat Akun</a>.
                        </p>
                        <p><a class="font-bold" href="">Lupa password?</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>

    </div>
</body>

</html>