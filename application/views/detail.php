<?php
foreach($dp as $det):
$e = $det->id_produk;
?>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active"><?php echo $det->nama_produk; ?></li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="products">
		<div class="container">
			<center><h2>DETAIL PRODUK</h2></center>
			<hr/>
			<br/>
			<br/>
			<div class="agileinfo_single">
				<div class="col-md-4 agileinfo_single_left">
				<?php
				if($det->gambar == null){
				?>
					<img id="example" src="<?php echo base_url(); ?>komponen/images/nophoto.png" alt=" " class="img-responsive">
				<?php }else{ ?>
					<img id="example" src="<?php echo base_url(); ?>komponen/images/products/<?php echo $det->gambar; ?>" alt=" " class="img-responsive">
				<?php } ?>
				</div>
				<div class="col-md-8 agileinfo_single_right">
				<?php
						if($det->stok > 0 && $det->stok <= 5){
						?>
						<span class="badge warning">Tinggal 5 ekor!</span>
						<?php
						}else if($det->stok > 5){
						?>
						<span class="badge success">Tersedia</span>
						<?php }else{ ?>
						<span class="badge danger">Habis</span>
						<?php } ?>
				<h2><?php echo $det->nama_produk; ?></h2>
					<div class="w3agile_description">
						<h4>Deskripsi Produk :</h4>
						<?php
						if($det->deskripsi == null){
						?>
						<p class="bebe">Tidak ada deskripsi.</p>
						<?php }else { ?>
						<p class="bebe"><?php echo $det->deskripsi; ?></p>
						<?php } ?>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing"><?php echo rupiah($det->harga); ?></h4>
						</div>
						<?php
											if($this->session->userdata('masuk')){
											?>
											<div class="snipcart-details top_brand_home_details">
												<?php
												if($det->stok > 0){
												?>
												<a href="<?php echo base_url('products/add/'); ?><?php echo $det->id_produk; ?>" class="btn lengku">Tambahkan Ke Keranjang</a>
												<?php }else{ ?>
												<a class="btn lengku">Tambahkan Ke Keranjang</a>
												<?php } ?>
											</div>
											<?php }else{ ?>
											<div class="snipcart-details top_brand_home_details">
												<a href="<?php echo base_url('auth'); ?>" class="btn lengku">Tambahkan Ke Keranjang</a>
											</div>
											<?php } ?>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>Produk Lainnya</h3>
				<div class="agile_top_brands_grids">
				<?php
				$i = $this->db->query("SELECT * FROM produk WHERE id_produk NOT IN ($e)")->result();
				foreach($i as $r):
				?>
					<div class="col-md-3 top_brand_left-1">
						<div class="card bg">
								<div class="card-body">
									<a href="<?php echo base_url('detail/product/'); ?><?php echo $r->id_produk; ?>">
									<?php
									if($r->gambar == null){
									?>
									<img title="<?php echo $r->nama_produk; ?>" alt="<?php echo $r->nama_produk; ?>" src="<?php echo base_url(); ?>komponen/images/nophoto.png" width="100%">
									<?php }else{ ?>
									<img title="<?php echo $r->nama_produk; ?>" alt="<?php echo $r->nama_produk; ?>" src="<?php echo base_url(); ?>komponen/images/products/<?php echo $r->gambar; ?>" width="100%">
									<?php } ?>
									</a>
									<br/>
									<br/>
									<h4><?php echo $r->nama_produk; ?></h4>
									<br/>
									<h4><?php echo rupiah($r->harga); ?></h4>
									<br/>
									<?php
											if($this->session->userdata('masuk')){
											?>
											<div class="snipcart-details top_brand_home_details">
												<a href="<?php echo base_url('home/add/'); ?><?php echo $r->id_produk; ?>" class="btn lengk btn-block">Tambahkan Ke Keranjang</a>
											</div>
											<?php }else{ ?>
											<div class="snipcart-details top_brand_home_details">
												<a href="<?php echo base_url('auth'); ?>" class="btn lengk btn-block">Tambahkan Ke Keranjang</a>
											</div>
											<?php } ?>
								</div>
							</div>
					</div>
					<?php endforeach; ?>
						<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //new -->
<?php endforeach; ?>