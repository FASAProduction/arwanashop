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
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet">
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
                                <br />
                                <br />
                                <form action="<?php echo base_url('client/my/apdetfoto'); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="cust_id"
                                        value="<?php echo $this->session->userdata('ses_id'); ?>" />
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="file" name="pict" class="basic-filepond">
                                    </div>
                                    <input type="hidden" value="<?php echo $cst->pict; ?>" name="picto" />
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <button type="submit" class="btn btn-success">Ganti Foto</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <?php
                                    if($this->session->flashdata('oke')){
                                    ?>
                                    <div class="notif">
                                        <?php echo $this->session->flashdata('oke'); ?>
                                    </div>
                                    <?php }?>
                                    <div class="card-header order-box">
                                        <h3 class="card-title">Rincian Akun Saya</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <small>Nama</small>
                                                <br />
                                                <h4><?php echo $cst->first_name . " " . $cst->last_name; ?></h4>
                                                <br />
                                                <br />
                                                <small>Email</small>
                                                <br />
                                                <h4><?php echo $cst->cust_email; ?></h4>
                                                <br />
                                                <br />
                                                <small>Nomor HP / WhatsApp</small>
                                                <br />
                                                <h4><?php echo $cst->cust_phone; ?></h4>
                                                <br />
                                                <br />
                                                <small>Saya adalah seorang</small>
                                                <br />
                                                <h4><?php echo $cst->who; ?></h4>
                                            </div>
                                            <div class="col-md-6">
                                                <small>Perusahaan</small>
                                                <br />
                                                <h4><?php echo $cst->company; ?></h4>
                                                <br />
                                                <br />
                                                <small>Username</small>
                                                <br />
                                                <h4><?php echo $cst->uname; ?></h4>
                                                <br />
                                                <br />
                                                <small>Negara</small>
                                                <br />
                                                <h4><?php echo $cst->country; ?></h4>
                                            </div>
                                        </div>
                                        <div class="closeacc">
                                            <a href="#">
                                                <font color="white">Close Account</font>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header order-box">
                                        <h4 class="card-title">Edit Akun</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <form action="<?php echo base_url('index.php/my/ubah'); ?>" method="POST">
                                                <input type="hidden" name="cust_id"
                                                    value="<?php echo $cst->cust_id; ?>" />
                                                <input type="hidden" name="pict" value="<?php echo $cst->pict; ?>" />
                                                <input type="hidden" name="pass" value="<?php echo $cst->pass; ?>" />
                                                <div class="col-md-12">
                                                    <div class="form-group position-relative has-icon-left mb-4">
                                                        <label>Username</label>
                                                        <input type="text" name="uname"
                                                            value="<?php echo $cst->uname; ?>"
                                                            class="form-control form-control-xl">
                                                    </div>
                                                    <div class="form-group position-relative has-icon-left mb-4">
                                                        <label>Nama Depan</label>
                                                        <input type="text" name="first_name"
                                                            value="<?php echo $cst->first_name; ?>"
                                                            class="form-control form-control-xl">
                                                    </div>
                                                    <div class="form-group position-relative has-icon-left mb-4">
                                                        <label>Nama Belakang</label>
                                                        <input type="text" name="last_name"
                                                            value="<?php echo $cst->last_name; ?>"
                                                            class="form-control form-control-xl">
                                                    </div>
                                                    <div class="form-group position-relative has-icon-left mb-4">
                                                        <label>Email</label>
                                                        <input type="email" name="cust_email"
                                                            value="<?php echo $cst->cust_email; ?>"
                                                            class="form-control form-control-xl">
                                                    </div>
                                                    <div class="form-group position-relative has-icon-left mb-4">
                                                        <label>Nomor HP / WhatsApp</label>
                                                        <input type="text" name="cust_phone"
                                                            value="<?php echo $cst->cust_phone; ?>"
                                                            class="form-control form-control-xl">
                                                    </div>
                                                    <div class="form-group position-relative has-icon-left mb-4">
                                                        <label>Jenis Kelamin</label>
                                                        <?php
                                                        if($cst->jk == "Wa"){
                                                            $jj = "Wanita";
                                                        }else{
                                                            $jj = "Pria";
                                                        }
                                                        ?>
                                                        <input type="text" name="jk" value="<?php echo $jj; ?>"
                                                            class="form-control form-control-xl" readonly>
                                                    </div>
                                                    <div class="form-group position-relative has-icon-left mb-4">
                                                        <label>Saya Adalah</label>
                                                        <select name="who" id="whoo"
                                                            class="form-control form-control-xl" onchange="siapa()">
                                                            <option value="<?php echo $cst->who; ?>">
                                                                <?php echo $cst->who; ?> (Dipilih)</option>
                                                            <?php
                                                                if($cst->who == "Mahasiswa"){
                                                                ?>
                                                            <option value="Personal">Personal / Perorangan</option>
                                                            <option value="Pebisnis">Pebisnis</option>
                                                            <?php }else if($cst->who == "Personal"){ ?>
                                                            <option value="Mahasiswa">Mahasiswa</option>
                                                            <option value="Pebisnis">Pebisnis</option>
                                                            <?php }else{ ?>
                                                            <option value="Personal">Personal</option>
                                                            <option value="Mahasiswa">Mahasiswa</option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group position-relative has-icon-left mb-4"
                                                        id="comp" style="display:none;">
                                                        <label>Perusahaan</label>
                                                        <input type="text" name="company"
                                                            value="<?php echo $cst->company; ?>"
                                                            class="form-control form-control-xl">
                                                    </div>
                                                    <div class="form-group position-relative has-icon-left mb-4">
                                                        <label>Negara</label>
                                                        <input type="text" name="country"
                                                            value="<?php echo $cst->country; ?>"
                                                            class="form-control form-control-xl" readonly>
                                                    </div>
                                                    <div class="form-group position-relative has-icon-left mb-4">
                                                        <button type="submit" class="btn btn-success btn-block">Ubah
                                                            Data</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <?php $this->load->view('dashboard/menu/footer'); ?>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>komponen/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>komponen/assets/js/bootstrap.bundle.min.js"></script>
    <script
        src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js">
    </script>
    <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>

    <!-- filepond -->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script>
    // register desired plugins...
    FilePond.registerPlugin(
        // validates the size of the file...
        FilePondPluginFileValidateSize,
        // validates the file type...
        FilePondPluginFileValidateType,

        // calculates & dds cropping info based on the input image dimensions and the set crop ratio...
        FilePondPluginImageCrop,
        // preview the image file type...
        FilePondPluginImagePreview,
        // filter the image file
        FilePondPluginImageFilter,
        // corrects mobile image orientation...
        FilePondPluginImageExifOrientation,
        // calculates & adds resize information...
        FilePondPluginImageResize,
    );

    // Filepond: Basic
    FilePond.create(document.querySelector('.basic-filepond'), {
        allowImagePreview: false,
        allowMultiple: false,
        allowFileEncode: false,
        required: false
    });

    // Filepond: Multiple Files
    FilePond.create(document.querySelector('.multiple-files-filepond'), {
        allowImagePreview: false,
        allowMultiple: true,
        allowFileEncode: false,
        required: false
    });

    // Filepond: With Validation
    FilePond.create(document.querySelector('.with-validation-filepond'), {
        allowImagePreview: false,
        allowMultiple: true,
        allowFileEncode: false,
        required: true,
        acceptedFileTypes: ['image/png'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });

    // Filepond: ImgBB with server property
    FilePond.create(document.querySelector('.imgbb-filepond'), {
        allowImagePreview: false,
        server: {
            process: (fieldName, file, metadata, load, error, progress, abort) => {
                // We ignore the metadata property and only send the file

                const formData = new FormData();
                formData.append(fieldName, file, file.name);

                const request = new XMLHttpRequest();
                // you can change it by your client api key
                request.open('POST', 'https://api.imgbb.com/1/upload?key=762894e2014f83c023b233b2f10395e2');

                request.upload.onprogress = (e) => {
                    progress(e.lengthComputable, e.loaded, e.total);
                };

                request.onload = function() {
                    if (request.status >= 200 && request.status < 300) {
                        load(request.responseText);
                    } else {
                        error('oh no');
                    }
                };

                request.onreadystatechange = function() {
                    if (this.readyState == 4) {
                        if (this.status == 200) {
                            let response = JSON.parse(this.responseText);

                            Toastify({
                                text: "Success uploading to imgbb! see console f12",
                                duration: 3000,
                                close: true,
                                gravity: "bottom",
                                position: "right",
                                backgroundColor: "#4fbe87",
                            }).showToast();

                            console.log(response);
                        } else {
                            Toastify({
                                text: "Failed uploading to imgbb! see console f12",
                                duration: 3000,
                                close: true,
                                gravity: "bottom",
                                position: "right",
                                backgroundColor: "#ff0000",
                            }).showToast();

                            console.log("Error", this.statusText);
                        }
                    }
                };

                request.send(formData);
            }
        }
    });

    // Filepond: Image Preview
    FilePond.create(document.querySelector('.image-preview-filepond'), {
        allowImagePreview: true,
        allowImageFilter: false,
        allowImageExifOrientation: false,
        allowImageCrop: false,
        acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });

    // Filepond: Image Crop
    FilePond.create(document.querySelector('.image-crop-filepond'), {
        allowImagePreview: true,
        allowImageFilter: false,
        allowImageExifOrientation: false,
        allowImageCrop: true,
        acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });

    // Filepond: Image Exif Orientation
    FilePond.create(document.querySelector('.image-exif-filepond'), {
        allowImagePreview: true,
        allowImageFilter: false,
        allowImageExifOrientation: true,
        allowImageCrop: false,
        acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });

    // Filepond: Image Filter
    FilePond.create(document.querySelector('.image-filter-filepond'), {
        allowImagePreview: true,
        allowImageFilter: true,
        allowImageExifOrientation: false,
        allowImageCrop: false,
        imageFilterColorMatrix: [
            0.299, 0.587, 0.114, 0, 0,
            0.299, 0.587, 0.114, 0, 0,
            0.299, 0.587, 0.114, 0, 0,
            0.000, 0.000, 0.000, 1, 0
        ],
        acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });

    // Filepond: Image Resize
    FilePond.create(document.querySelector('.image-resize-filepond'), {
        allowImagePreview: true,
        allowImageFilter: false,
        allowImageExifOrientation: false,
        allowImageCrop: false,
        allowImageResize: true,
        imageResizeTargetWidth: 200,
        imageResizeTargetHeight: 200,
        imageResizeMode: 'cover',
        imageResizeUpscale: true,
        acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });
    </script>

    <script src="<?php echo base_url(); ?>komponen/assets/js/mazer.js"></script>

    <script>
    function siapa() {
        var c = document.getElementById("whoo").value;

        if (c == "") {
            document.getElementById("comp").style.display = 'none';
        } else if (c == "Pebisnis") {
            document.getElementById("comp").style.display = 'block';
        } else {
            document.getElementById("comp").style.display = 'none';
        }
    }
    </script>
</body>

</html>
<?php endforeach; ?>