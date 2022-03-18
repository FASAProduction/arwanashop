<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
			<?php echo $this->session->flashdata('yey'); ?>
			<h3>Produk Baru</h3>
				<div class="agile_top_brands_grids">
				<?php
				foreach($p as $pro):
				?>
					<div class="col-md-4 top_brand_left-1">
						<div class="card bg">
								<div class="card-body">
									<a href="<?php echo base_url('detail/product/'); ?><?php echo $pro->id_produk; ?>"><img title=" " alt=" " src="<?php echo base_url(); ?>komponen/images/arwanalg.png" width="100%"></a>
									<h4><?php echo $pro->nama_produk; ?></h4>
									<br/>
									<h4><?php echo rupiah($pro->harga); ?></h4>
									<br/>
									<?php
											if($this->session->userdata('masuk')){
											?>
											<div class="snipcart-details top_brand_home_details">
												<a href="<?php echo base_url('home/add/'); ?><?php echo $pro->id_produk; ?>" class="btn lengk btn-block">Tambahkan Ke Keranjang</a>
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