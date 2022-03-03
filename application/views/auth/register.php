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
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/css/animasi.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>komponen/assets/css/pages/auth.css">
    <link rel="shorcut icon" href="<?php echo base_url(); ?>komponen/images/fav.png">
    <style>
    .kartu {
        width: 1250px;
        height: 590px;
        border-radius: 24px 24px;
        box-shadow: 0px 1px 13px 4px #b9b9b9;
        padding: 22px 32px 27px 29px;
        margin: 32px 0px 0px -420px;
        animation: slideInDown;
        animation-duration: 1s;
    }
    </style>
</head>

<body style="background: url('<?php echo base_url(); ?>komponen/assets/images/bg/bege.jpg');">
    <div id="auth">

        <div class="row h-100">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="kartu" id="badan"
                    style="background: url('<?php echo base_url(); ?>komponen/assets/images/bg/wadaw.jpg'); background-size: cover;">
                    <div class="auth-logo">
                        <a href="<?php echo base_url('client/auth/create'); ?>"><img
                                src="<?php echo base_url(); ?>komponen/assets/images/logo/flogo.png" alt="Logo"
                                width="20%"></a>
                    </div>
                    <br />
                    <br />
                    <h1 class="auth-title">Buat Akun.</h1>
                    <p class="auth-subtitle mb-2">Buat akun dengan mudah di FasTechnology.</p>

                    <form action="<?php echo base_url('client/auth/regis'); ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="first_name" class="form-control form-control-xl"
                                                placeholder="Nama Depan" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="last_name" class="form-control form-control-xl"
                                                placeholder="Nama Belakang" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select class="form-control form-control-xl" name="jk" required>
                                                <option value="">-- Jenis Kelamin --</option>
                                                <option value="Pr">Pria</option>
                                                <option value="Wa">Wanita</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="uname" class="form-control form-control-xl"
                                                placeholder="Username" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="password" name="pass" class="form-control form-control-xl"
                                                placeholder="Password" required>
                                            <div class="form-control-icon">
                                                <i class="bi bi-shield-lock"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="cust_email" class="form-control form-control-xl"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <select class="form-control form-control-xl" name="country" required>
                                        <option value="">-- Pilih Negara Anda --</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Japan">Japan</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="U.S">United States</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <input type="number" name="cust_phone" class="form-control form-control-xl"
                                        placeholder="Nomor HP / WhatsApp">
                                    <div class="form-control-icon">
                                        <i class="bi bi-whatsapp"></i>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left mb-4">
                                    <select class="form-control form-control-xl" name="who" id="whoo"
                                        onChange="muncul()" required>
                                        <option value="">-- Siapakah Anda? --</option>
                                        <option value="Mahasiswa">Mahasiswa</option>
                                        <option value="Personal">Personal / Perorangan</option>
                                        <option value="Pebisnis">Pebisnis</option>
                                    </select>
                                    <div class="form-control-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left mb-1" id="comp"
                                    style="display:none;">
                                    <input type="text" class="form-control form-control-xl" name="company"
                                        placeholder="Nama Perusahaan Anda">
                                    <div class="form-control-icon">
                                        <i class="bi bi-building"></i>
                                    </div>
                                </div>
                                <input type="hidden" name="pict" value="" />
                                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Buat Akun</button>

                                <div class="text-left mt-3 text-lg fs-4">
                                    <p class="text-gray-600">Sudah punya akun? <a
                                            href="<?php echo base_url('client/auth/login'); ?>"
                                            class="font-bold">Masuk</a>.</p>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
        </div>
    </div>

    </div>
    <script>
    function muncul() {
        var qe = document.getElementById("whoo").value;

        if (qe == "") {
            document.getElementById("comp").style.display = 'none';
        } else if (qe == "Pebisnis") {
            document.getElementById("comp").style.display = 'block';
        } else {
            document.getElementById("comp").style.display = 'none';
        }
    }
    </script>
</body>

</html>