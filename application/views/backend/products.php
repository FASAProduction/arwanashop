<section class="section">
      <div class="section-body">
			<div class="row ">
			<div class="col-md-12">
				<div class="alert alert-success">
					Data produk bisa Anda akses di halaman ini. Anda juga dapat mengelola produk (menambah atau mengurangi produk dan stok) di halaman ini. 
				</div>
			</div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<a href="" data-toggle="modal" data-target=".addproduct" class="touch">
              <div class="card wadaw">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="card-content tgh">
					  <h2>Tambah Produk</h2>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
			</a>
            </div>
			<?php echo $this->session->flashdata('addsuccess'); ?>
            <div class="col-md-12">
				<div class="card">
                  <div class="card-header">
                    <h4>Data Produk</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
						<?php
						$no = 1;
						foreach($prdct as $prd):
						?>
                          <tr>
                            <td>
                              <?php echo $no++; ?>
                            </td>
                            <td><?php echo $prd->nama_produk; ?></td>
                            <td><?php echo rupiah($prd->harga); ?></td>
							<td>
							<?php
							if($prd->stok < 6){
							?>
							<?php echo $prd->stok; ?> 
							<a href=""><span class="badge badge-success ov"><i class="fa fa-plus"></i></span></a>
							<?php }else{
								echo $prd->stok;
							} ?>
							</td>
							<td>
							 <a href="" data-toggle="modal" data-target=".detailproduct<?php echo $prd->id_produk; ?>"><span class="badge badge-info"><i class="fa fa-eye"></i></span></a>
							</td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
			</div>
          </div>
	  </div>
</section>
<?php $this->load->view('backend/inc/addproducts'); ?>
<?php $this->load->view('backend/inc/detailproduct'); ?>