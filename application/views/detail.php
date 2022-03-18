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
			<div class="agileinfo_single">
				
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="<?php echo base_url(); ?>komponen/images/14.png" alt=" " class="img-responsive">
				</div>
				<div class="col-md-8 agileinfo_single_right">
				<h2><?php echo $det->nama_produk; ?></h2>
					<div class="w3agile_description">
						<h4>Description :</h4>
						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
							officia deserunt mollit anim id est laborum.Duis aute irure dolor in 
							reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur.</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing"><?php echo rupiah($det->harga); ?></h4>
						</div>
						<?php
											if($this->session->userdata('masuk')){
											?>
											<div class="snipcart-details agileinfo_single_right_details">
												<a href="<?php echo base_url('home/add/'); ?><?php echo $det->id_produk; ?>" class="btn btn-info tbl">Tambahkan Ke Keranjang</a>
											</div>
											<?php }else{ ?>
											<div class="snipcart-details agileinfo_single_right_details">
												<a href="<?php echo base_url('auth'); ?>" class="btn btn-info tbl">Tambahkan Ke Keranjang</a>
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
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="<?php echo base_url(); ?>komponen/images/offer.png" alt=" " class="img-responsive">
								</div>
								<?php $pr = $r->id_produk; ?>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="<?php echo base_url('detail/product/'); ?><?php echo $pr; ?>"><img title=" " alt=" " src="<?php echo base_url(); ?>komponen/images/14.png"></a>
													<h4><?php echo $r->nama_produk; ?></h4>
													<br/>
													<h4><?php echo rupiah($r->harga); ?></h4>
											</div>
											<?php
											if($this->session->userdata('masuk')){
											?>
											<div class="snipcart-details top_brand_home_details">
												<a href="<?php echo base_url('home/add/'); ?><?php echo $r->id_produk; ?>" class="btn btn-info tbl">Tambahkan Ke Keranjang</a>
											</div>
											<?php }else{ ?>
											<div class="snipcart-details top_brand_home_details">
												<a href="<?php echo base_url('auth'); ?>" class="btn btn-info tbl">Tambahkan Ke Keranjang</a>
											</div>
											<?php } ?>
										</div>
									</figure>
								</div>
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