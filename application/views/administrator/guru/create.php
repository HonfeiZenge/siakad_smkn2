<div class="container-fluid p-3">

	<div class="alert alert-success" role="alert" style="background: #9ec5fe;">
		<i class="bi bi-person-fill"></i> Form Input Guru
	</div>
	<?php if(validation_errors()) { ?>
	<div class="alert alert-warning" role="alert">
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
	<?php echo form_open_multipart('administrator/guru/create') ?>
		<div class="form-group">
			<label>NIP</label>
			<input type="text" name="nip" placeholder="Masukkan NIP" class="form-control">
		</div>

		<div class="form-group">
			<label>NUPTK</label>
			<input type="text" name="nuptk" placeholder="Masukkan NUPTK" class="form-control">
		</div>

		<div class="form-group">
			<label>Nama Lengkap Guru</label>
			<input type="text" name="nama_guru" placeholder="Masukkan Nama Lengkap" class="form-control">
		</div>

		<div class="form-group">
			<label>Tempat Lahir</label>
			<input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" class="form-control">
		</div>

		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" class="form-control">
		</div>

		<div class="form-group">
			<label>Jenis Kelamin</label>
			<select name="jenis_kelamin" class="form-control">
				<option>-- Pilih Jenis Kelamin --</option>
				<option>Laki-Laki</option>
				<option>Perempuan</option>
			</select>
		</div>

		<div class="form-group">
			<label>Agama</label>
			<select name="agama" class="form-control">
				<option>-- Pilih Agama --</option>
				<option>Islam</option>
				<option>Protestan</option>
				<option>Katholik</option>
				<option>Hindu</option>
				<option>Buddha</option>
				<option>Konghucu</option>
			</select>
		</div>

		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control">
		</div>
		
		<div class="form-group">
			<label>Telepon</label>
			<input type="text" name="telepon" placeholder="Masukkan Telepon" class="form-control">
		</div>

		<div class="form-group">
			<label>Pendidikan Terakhir</label>
			<input type="text" name="pendidikan_terakhir" placeholder="pendidikan_terakhir" class="form-control">	
		</div>

		<div class="form-group">
			<label>Foto</label><br>
			<input type="file" name="foto">
		</div>

		<button type="submit" class="btn btn-primary mb-5 mt-3">Simpan
		</button>
	<?php form_close(); ?>
</div>