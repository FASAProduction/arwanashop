<?php
foreach($deta as $ca):
?>
<div class="modal fade text-left wow" id="details<?php echo $ca->cart_id; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel110" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header pic">
                <h5 class="modal-title" id="myModalLabel110">Detail Pesanan Anda
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <small>
                            Nama Paket
                        </small>
                        <h5><?php echo $ca->packet_name; ?></h5>
                        <hr />
                        <small>
                            Nama Project
                        </small>
                        <h5><?php echo $ca->project_name; ?></h5>
                        <hr />
                        <small>
                            Deskripsi Project
                        </small>
                        <h5><?php echo $ca->descript; ?></h5>
                        <hr />
                        <small>
                            Fitur yang diinginkan
                        </small>
                        <h5><?php echo $ca->feature; ?></h5>
                        <hr />
                        <small>
                            Durasi
                        </small>
                        <h5><?php echo $ca->duration; ?> Bulan</h5>
                    </div>
                </div>
            </div>
            <div class="modal-footer pic-bottom">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tutup</span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>