<div class="container-fluid p-3">

	<div class="alert alert-success" role="alert" style="background: #9ec5fe;">
		<i class="bi bi-person-fill"></i> Form Input Guru
	</div>
	<?php if(validation_errors()) : ?>
	<div class="alert alert-warning" role="alert">
		<?php echo validation_errors(); ?>
	</div>
	<?php endif; ?>
	<?php echo form_open_multipart('administrator/guru/edit/'.$guru['id_guru']); ?>
		<input type="hidden" name="id" value="<?= $guru['id_guru'] ?>" />
		<div class="form-group">
			<label>NIP</label>
			<input type="text" name="nip" class="form-control" value="<?= $guru['nip'] ?>">
		</div>

		<div class="form-group">
			<label>NUPTK</label>
			<input type="text" name="nuptk" value="<?= $guru['nuptk'] ?>" class="form-control">
		</div>

		<div class="form-group">
			<label>Nama Lengkap Guru</label>
			<input type="text" name="nama_guru" value="<?= $guru['nama_lengkap']; ?>" class="form-control">
		</div>

		<div class="form-group">
			<label>Tempat Lahir</label>
			<input type="text" name="tempat_lahir" value="<?= $guru['tempat_lahir']; ?>" class="form-control">
		</div>

		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir" value="<?= $guru['tanggal_lahir']; ?>" class="form-control">
		</div>

		<div class="form-group">
			<label>Jenis Kelamin</label>
			<select name="jenis_kelamin" class="form-control">
				<option><?= $guru['jenis_kelamin'] ?></option>
				<option>Laki-Laki</option>
				<option>Perempuan</option>
			</select>
		</div>

		<div class="form-group">
			<label>Agama</label>
			<select name="agama" class="form-control">
				<?php foreach ($agama as $key => $ag) : ?>
					<?php if ($ag == $guru['agama']) : ?>
						<option value="<?= $ag ?>" selected><?= $ag ?></option>
					<?php else : ?>
						<option value="<?= $ag ?>"><?= $ag ?></option>
					<?php endif; ?>
				<?php endforeach; ?>
			</select>
		</div>

		<div class="form-group">
			<label>Alamat</label>
			<input type="text" name="alamat" value="<?= $guru['alamat'] ?>" class="form-control">
		</div>
		
		<div class="form-group">
			<label>Telepon</label>
			<input type="text" name="telepon" value="<?= $guru['telepon'] ?>" class="form-control">
		</div>

		<div class="form-group">
			<label>Pendidikan Terakhir</label>
			<input type="text" name="pendidikan_terakhir" value="<?= $guru['pendidikan_terakhir'] ?>" class="form-control">	
		</div>

		<img src="<?php echo base_url(). 'uploads/foto_guru/'.$guru['foto'] ?>" class="w-50">
		<h6>Details : <?= $guru['foto'] ?></h6>

		<div class="form-group">
			<label>Foto</label>
			<input type="file" name="userfile" value="<?php echo $guru['foto'] ?>">
		</div>

		<button type="submit" class="btn btn-primary mb-5 mt-3">Ubah
		</button>
	<?php form_close(); ?>
</div>