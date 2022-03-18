<section class="section">
      <div class="section-body">
			<div class="row">
              <div class="col-12">
				<div class="alert alert-success">
				Anda bisa mencetak faktur penjualan dengan menggunakan halaman ini.
				</div>
              </div>
			  <div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4>Filter</h4>
					</div>
					<div class="card-body">
						<form action="<?php echo base_url('backend/report/filter'); ?>" method="POST">
							<div class="form-group">
								<label>Dari tanggal</label>
								<input type="date" class="form-control" name="from" />
							</div>
							<div class="form-group">
								<label>Sampai tanggal</label>
								<input type="date" class="form-control" name="to" />
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success">Filter</button>
							</div>
						</form>
					</div>
				</div>
			  </div>
            </div>
	  </div>
</section>