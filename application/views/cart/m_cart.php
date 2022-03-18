<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>Keranjang Saya</h3>
			<br/>
			<br/>
			<div class="row">
				<div class="col-md-8">
					<div class="card bg">
						<div class="card-body">
							<h4>Detail Pembelian</h4>
							<br/>
							<?php
							$total = 0;
							foreach($cr as $c):
							?>
							<br/>
							<div class="row">
								<div class="col-xs-7">
									<?php echo $c->nama_produk; ?>
								</div>
								<?php
									$subtotal = 0;
									$subtotal = $c->harga * $c->qty;
									$total += $subtotal;
									?>
								<div class="col-md-3">
									<b><?php echo rupiah($subtotal); ?></b>
								</div>
								<div class="col-md-5">
									<?php echo $c->harga; ?>
								</div>
								<div class="col-md-2">
									x<?php echo $c->qty; ?>
								</div>
							</div>
							<hr/>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="card floating">
						<div class="card-body">
							<div class="row">
								<div class="col-xs-7">
								Total
								</div>
								<div class="col-xs-5">
								<b><font size="4"><?php echo rupiah($total); ?></font></b>
								</div>
							</div>
							<br/>
							<a href="<?php echo base_url('cart/checkout'); ?>" class="btn btn-success btn-block panjj">Checkout</a>
						</div>
					</div>
<!-- //new -->