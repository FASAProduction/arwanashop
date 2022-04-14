<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Ruangan Saya</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="container">
		<div class="row">
			<br/>
			<br/>
			<br/>
			<h2>Ruangan Saya</h2>
			<br/>
			<br/>
			<br/>
			<div class="col-md-4">
				<img src="<?php echo base_url(); ?>komponen/images/nophoto.png" width="100%" style="border-radius: 50%; box-shadow: 0px 0px 1px 5px #e8e8e8;" />
				<br/>
				<br/>
				<form>
					<div class="form-group">
						<label>Ubah foto profil</label>
						<input type="file" class="form-control inp" name="pic" required />
					</div>
					<div class="form-group">
						<button type="submit" class="btn lengk btn-block">Ubah</button>
					</div>
				</form>
				<br/>
				<br/>
				<div class="card" style="border-radius: 20px 20px; background-color: #fff; padding: 24px 9px 33px 23px; box-shadow: 0px 0px 0px 1px #e8e8e8;">
					<div class="card-header">
					<h2>Informasi Akun</h2>
					</div>
					<div class="card-body">
						<br/>
						<br/>
						<small>Nama Lengkap</small>
						<br/>
						<h4><?php echo $pelanggan['nama_lengkap']; ?></h4>
						<br/>
						<small>Alamat</small>
						<br/>
						<h4 class="bebe"><?php echo $pelanggan['alamat']; ?>
						<?php echo $pelanggan['nama_provinsi']; ?></h4>
						<br/>
						<small>Nomor HP</small>
						<br/>
						<h4>+62<?php echo substr($pelanggan['no_hp'],1); ?></h4>
						<br/>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<?php echo $this->session->flashdata('go'); ?>
				<div class="card" style="border-radius: 20px 20px; background-color: #f7f7f7; padding: 24px 9px 33px 23px;">
					<div class="card-header">
					<h2>Ubah Info Akun</h2>
					</div>
					<div class="card-body">
					<br/>
					<br/>
						<form action="<?php echo base_url('my/profilechange'); ?>" method="POST">
							<input type="hidden" value="<?php echo $pelanggan['id_pelanggan']; ?>" name="id_pelanggan" />
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<label>Nama Tampilan</label>
									<input type="text" name="nama_lengkap" value="<?php echo $pelanggan['nama_lengkap']; ?>" class="form-control inp" required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label>Nama Pengguna</label>
									<input type="text" name="username" value="<?php echo $pelanggan['username']; ?>" class="form-control inp" readonly />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Alamat</label>
										<textarea name="alamat" class="form-control inp bebe" required ><?php echo $pelanggan['alamat']; ?></textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Provinsi</label>
										<select class="form-control inp" name="id_provinsi" required>
										<option value="<?php echo $pelanggan['id_provinsi']; ?>"><?php echo $pelanggan['nama_provinsi']; ?> [Dipilih]</option>
										<?php
										$currentprov = $pelanggan['id_provinsi'];
										$prov = $this->db->query("SELECT * FROM provinsi WHERE id_provinsi NOT IN ($currentprov)")->result();
										foreach($prov as $prv):
										?>
										<option value="<?php echo $prv->id_provinsi; ?>"><?php echo $prv->nama_provinsi; ?></option>
										<?php endforeach; ?>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Nomor HP</label>
								<input type="number" name="no_hp" value="<?php echo $pelanggan['no_hp']; ?>" class="form-control inp" required />
							</div>
							<div class="form-group">
								<button class="btn lengk btn-block" type="submit">Ubah Akun</button>
							</div>
						</form>
					</div>
				</div>
				<br/>
				<br/>
				<div class="card" style="border-radius: 20px 20px; background-color: #f7f7f7; padding: 24px 9px 33px 23px;">
					<div class="card-header">
					<h2>Settings</h2>
					</div>
					<div class="card-body">
					<br/>
					<br/>
						<form>
							<div class="form-group">
								<label>Password</label>
								<input type="password" id="pass" name="password" class="form-control inp" placeholder="Masukkan password baru Anda. Kosongkan jika tidak ingin mengganti." required />
								<div id="ceklek" onclick="tunjukkanPass();"><i class="fa fa-eye fa-2x" id="mata"></i></div>
							</div>
							<div class="form-group">
								<button class="btn lengk btn-block" type="submit">Ubah Password</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br/>
		<br/>
		<br/>
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
<script type="text/javascript">
            const password = document.getElementById('pass');
            const toggle = document.getElementById('ceklek');
			const kelas = document.getElementById('mata');
            
            function tunjukkanPass(){
                if(password.type === 'password'){
                    password.setAttribute('type', 'text');
					kelas.setAttribute('class', 'fa fa-eye-slash fa-2x');
                } else{
                    password.setAttribute('type', 'password');
					kelas.setAttribute('class', 'fa fa-eye fa-2x');
                }
            }
        </script>