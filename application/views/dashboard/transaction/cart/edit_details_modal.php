<?php
foreach($deta as $ca):
?>
<div class="modal fade text-left wow" id="detailsedit<?php echo $ca->cart_id; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel110" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header pic">
                <h5 class="modal-title" id="myModalLabel110">Edit Detail Pesanan Anda
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('client/cart/edtdetails'); ?>" method="POST">
                    <?php
				$crt = $ca->cart_id;
				$pkt = $ca->packet_id;
				?>
                    <input type="hidden" name="cart_id" value="<?php echo $crt; ?>" />
                    <input type="hidden" name="packet_id" value="<?php echo $pkt; ?>" />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Paket</label>
                                <input type="text" class="form-control" value="<?php echo $ca->packet_name; ?>"
                                    readonly />
                            </div>
                            <div class="form-group">
                                <label>Judul Project Web Anda</label>
                                <input type="text" class="form-control" name="project_name"
                                    value="<?php echo $ca->project_name; ?>" />
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Project</label>
                                <textarea class="form-control" name="description"
                                    rows="8"><?php echo $ca->description; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Fitur Project</label>
                                <textarea class="form-control" name="feature" rows="8"
                                    value="<?php echo $ca->feature; ?>"><?php echo $ca->feature; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Durasi (bulan)</label>
                                <input type="number" class="form-control" name="duration"
                                    value="<?php echo $ca->duration; ?>" />
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer pic-bottom">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tutup</span>
                </button>
                <button class="btn btn-success" type="submit">Selesai</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>