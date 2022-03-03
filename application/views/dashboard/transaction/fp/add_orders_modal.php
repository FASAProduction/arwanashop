<div class="modal fade text-left wow" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel110"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header pic">
                <h5 class="modal-title" id="myModalLabel110">Tambahkan Pesanan Web Anda
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
					<?php
					foreach($pack as $pro):
					?>
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
							<h5><?php echo $pro->packet_name; ?></h5>
							<p><?php echo rupiah($pro->price); ?></p>
							<br/>
							<br/>
							<a class="btn btn-success btn-small" href="<?php echo base_url('client/fp_orders/addcart/'); ?><?php echo $pro->packet_id; ?>">Tambahkan Ke Keranjang</a>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
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