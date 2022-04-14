<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
			<?php echo $this->session->flashdata('yey'); ?>
			<h3>Hasil pencarian '<?php echo $kunci; ?>'</h3>
				<div class="agile_top_brands_grids">
				<?php
				foreach($hasilcari as $pro):
				?>
					<div class="col-md-3 col-lg-3 col-sm-3">
						<div class="card bg">
								<div class="card-body">
									<a href="<?php echo base_url('detail/product/'); ?><?php echo $pro->id_produk; ?>">
									<?php
									if($pro->gambar == null){
									?>
									<img title="<?php echo $pro->nama_produk; ?>" alt="<?php echo $pro->nama_produk; ?>" src="<?php echo base_url(); ?>komponen/images/nophoto.png" style="width: 100%; border-radius: 15px 15px;">
									<?php }else{ ?>
									<img title=" " alt=" " src="<?php echo base_url(); ?>komponen/images/products/<?php echo $pro->gambar; ?>" style="width: 100%; height: 150px; border-radius: 15px 15px; margin: 0px 0px 0px -9px;">
									<?php } ?>
									</a>
									<br/>
									<br/>
									<h4><?php echo $pro->nama_produk; ?></h4>
									<br/>
									<h4><?php echo rupiah($pro->harga); ?></h4>
									<br/>
									<?php
											if($this->session->userdata('masuk')){
											?>
											<div class="snipcart-details top_brand_home_details">
												<a href="<?php echo base_url('products/add/'); ?><?php echo $pro->id_produk; ?>" class="btn lengk btn-block">Tambahkan Ke Keranjang</a>
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
<?php
if($this->session->userdata('masuk')){
	if($krjg > 0){
		$total = 0;
		foreach($cart as $crt){
			$subtotal = $crt['harga'] * $crt['qty'];
			$total += $subtotal;
		}
?>
<a href="<?php echo base_url('cart'); ?>">
	<div class="keranjang">
		<i class="fa fa-shopping-cart"></i> <?php echo $krjg; ?> Item (<?php echo rupiah($total); ?>) <i class="fa fa-arrow-right"></i>
	</div>
</a>
	<?php }else{}
}	
?>