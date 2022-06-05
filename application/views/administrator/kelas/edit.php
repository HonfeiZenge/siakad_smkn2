<div class="container-fluid p-3">

	<div class="alert " role="alert" style="background: #9ec5fe;">
		<i class="bi bi-people-fill"></i></i> Form Input 
	</div>
	<?php if(validation_errors()) : ?>
	<div class="alert alert-warning" role="alert">
		<?php echo validation_errors(); ?>
	</div>
	<?php endif; ?>
	<?php echo form_open_multipart('administrator/kelas/update_data') ?>
	<input type="hidden" name="id" value="<?= $kelas['id_kelas'] ?>">
	<div class="form-group">
		<label>Jenjang Kelas</label>
		<select name="jenjang_kelas" class="form-control">
			<?php foreach ($jenjang_kelas as $jk) : ?>
				<?php if ($jk == $kelas['jenjang_kelas']) : ?>
					<option value="<?= $jk ?>" selected><?= $jk ?></option>
				<?php else : ?>
					<option value="<?= $jk ?>"><?= $jk ?></option>
				<?php endif; ?>
			<?php endforeach; ?>
		</select>
	</div>

	<div class="form-group">
		<label>Kompetensi Keahlian</label>
		<select name="kompetensi_keahlian" class="form-control">
			<?php foreach ($kompetensi_keahlian as $kk) : ?>
				<?php if ($kelas['id_kompetensi_keahlian'] == $kk['id_kompetensi_keahlian']) : ?>
					<option value="<?= $kelas['id_kompetensi_keahlian'] ?>" selected><?= $kk['nama_kompetensi_keahlian'] ?></option>
				<?php else : ?>
					<option value="<?= $kk['id_kompetensi_keahlian'] ?>"><?= $kk['nama_kompetensi_keahlian'] ?></option>
				<?php endif; ?>
				<?php echo $kk['id_kompetensi_keahlian']; ?>
			<?php endforeach; ?>
		</select>
	</div>

	<div class="form-group">
		<label>Index Kelas</label>
		<input type="text" name="index_kelas" placeholder="Masukkan Index Kelas" class="form-control" value="<?= $kelas['index_kelas'] ?>">
	</div>

	<div class="form-group">
		<label>Nama Wali Kelas</label>
		<div class="d-flex">
			<input type="hidden" name="id_guru" id="id_guru" value="<?= $kelas['id_guru'] ?>">
			<input type="text" name="nama_guru" id="nama_guru" placeholder="Pilih Guru" class="form-control" value="<?= $kelas['nama_lengkap'] ?>" readonly="true">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalGuru">
				<i class="bi bi-search"></i>
			</button>
		</div>
	</div>

	<div class="form-group">
		<label>Jumlah Murid</label>
		<input type="text" name="jumlah_murid" placeholder="Masukkan Jumlah Murid" class="form-control" value="<?= $kelas['jumlah_murid'] ?>">
	</div>

	<!-- Modal Guru -->
	<div class="modal fade" id="modalGuru" tabindex="-1" aria-labelledby="listGuru" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="listGuru">List Guru</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<table class="table table-bordered table-striped table-hover">
					<tr>
						<td class="text-center">NIP</td>
						<td class="text-center">Nama Guru</td>
						<td class="text-center"><i class="bi bi-check-circle"></i></td>
					</tr>
					<?php foreach ($guru as $key => $val) :?>
						<tr>
							<td><?= $val['nip'] ?></td>
							<td><?= $val['nama_lengkap'] ?></td>
							<td class="text-center">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="selectGuru" id="selectGuru" value="<?= $val['id_guru'].','.$val['nama_lengkap'] ?>">
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
				<button type="button" class="btn btn-primary" id="pilihGuru" data-bs-dismiss="modal">Pilih Guru</button>
			</div>
			</div>
		</div>
	</div>

	<button type="submit" class="btn btn-primary mb-5 mt-3">Simpan
	</button>

	<?php form_close(); ?>
</div>