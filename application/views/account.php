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
						<h4><?php echo $pelanggan['no_hp']; ?></h4>
						<br/>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card" style="border-radius: 20px 20px; background-color: #f7f7f7; padding: 24px 9px 33px 23px;">
					<div class="card-header">
					<h2>Ubah Info Akun</h2>
					</div>
					<div class="card-body">
					<br/>
					<br/>
						<form>
							<div class="form-group">
							<label>Nama Tampilan</label>
							<input type="text" name="nama_lengkap" value="<?php echo $pelanggan['nama_lengkap']; ?>" class="form-control inp" />
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Alamat</label>
										<textarea name="alamat" class="form-control inp bebe"><?php echo $pelanggan['alamat']; ?></textarea>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Provinsi</label>
										<select class="form-control inp" name="id_provinsi">
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