<?php
foreach($prdct as $dee):
?>
<div class="modal fade detailproduct<?php echo $dee->id_produk; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content bege">
              <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Detail Produk <?php echo $dee->nama_produk; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										Nama Produk
										<hr/>
										Deskripsi
										<hr/>
										Harga
										<hr/>
										Stok
									</div>
									<div class="col-md-6">
										<b>
											: <?php echo $dee->nama_produk; ?>
											<hr/>
											: <?php echo $dee->deskripsi; ?>
											<hr/>
											: <?php echo rupiah($dee->harga); ?>
											<hr/>
											: <?php echo $dee->stok; ?> Ekor
										</b>
									</div>
								</div>
							</div>
						</div>
						<a href="#edit<?php echo $dee->id_produk; ?>" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="edit<?php echo $dee->id_produk; ?>"><span class="badge badge-success"><i class="fa fa-pencil"></i> Edit Produk</span></a>
						<a href=""><span class="badge badge-success"><i class="fa fa-plus"></i> Tambah Stok</span></a>
						<a href=""><span class="badge badge-danger"><i class="fa fa-trash"></i> Hapus Produk</span></a>
					</div>
					<div class="col-md-6">
					<?php
					if($dee->gambar == null){
					?>
					<img src="<?php echo base_url(); ?>komponen/images/arwanalogo2.png" class="timbul" />
					<?php }else{ ?>
					<img src="<?php echo base_url(); ?>komponen/images/products/<?php echo $dee->gambar; ?>" class="timbul" />
					<?php } ?>
					<br/>
					<br/>
					<br/>
					</div>
					<br/>
					<br/>
					<div class="col-md-12 collapse" id="edit<?php echo $dee->id_produk; ?>">
						<div class="card">
							<div class="card-body">
								<form action="<?php echo base_url('backend/products/edit'); ?>" method="POST" enctype="multipart/form-data">
									<div class="form-group">
										<label>Nama Produk</label>
										<input type="text" class="form-control" name="nama_produk" value="<?php echo $dee->nama_produk; ?>" required />
									</div>
									<div class="form-group">
										<label>Deskripsi</label>
										<textarea class="form-control" name="deskripsi" rows="10" required><?php echo $dee->deskripsi; ?></textarea>
									</div>
									<div class="form-group">
										<label>Stok</label>
										<input type="number" class="form-control" name="stok" value="<?php echo $dee->stok; ?>" required />
									</div>
									<div class="form-group">
										<label>Harga</label>
										<input type="number" class="form-control" name="harga" value="<?php echo $dee->harga; ?>" required />
									</div>
									<div class="form-group">
										<label>Gambar Produk</label>
										<input type="file" class="form-control" name="gambar" accept="image/png, image/jpeg, image/jpg" required />
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-success btn-block">Edit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
              </div>
            </div>
          </div>
        </div>
<?php endforeach; ?>