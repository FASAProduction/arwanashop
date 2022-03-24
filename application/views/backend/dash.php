<section class="section">
      <div class="section-body">
			<div class="row ">
			<div class="col-md-12">
				<div class="alert alert-success">
					Selamat Datang <?php echo $admn['nama_admin']; ?>! Berhati - hatilah dalam mengelola halaman ini. Berikut adalah statistik penjualan dari Arwana Store. 
				</div>
			</div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Semua Transaksi</h5>
                          <h2 class="mb-3 font-18"><font size="8"><?php echo $trans; ?></font></h2>
						  <p class="mb-0">Sudah Bayar: <span class="col-green"><?php echo $transpayed; ?> Transaksi</span>
						  <br/>
						  Belum Bayar: <span class="col-red"><?php echo $transnonpayed; ?> Transaksi</span></p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="<?php echo base_url(); ?>komponen/backend/assets/img/banner/1.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15"> Pelanggan</h5>
                          <h2 class="mb-3 font-18"><font size="8"><?php echo $cust; ?></font></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="<?php echo base_url(); ?>komponen/backend/assets/img/banner/2.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15"> Total Pendapatan</h5>
                          <h2 class="mb-3 font-18"><font size="6"><?php echo rupiah($total['too']); ?></font></h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="<?php echo base_url(); ?>komponen/backend/assets/img/banner/4.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Grafik Penjualan</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart"></canvas>
                  </div>
                </div>
              </div>
          </div>
	  </div>
</section>