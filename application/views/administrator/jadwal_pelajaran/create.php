<div class="container-fluid p-3">

	<div class="alert p-1" role="alert" style="background: #9ec5fe;"S>
		<a class="text-dark btn btn-outline-light border-0" href="">
			Jadwa Pelajaran
		</a>
		<span>/</span>
		<a class="text-dark btn btn-outline-light border-0" href="">
			Edit Jadwal
		</a>
	</div>

	<form id="formJadwal" action="<?php echo base_url() ?>/administrator/jadwal_pelajaran/create" method="POST">
		<div class="card">
			<div class="card-body">

				<div class="form-group">
					<label>Hari</label>
					<input type="text" name="hari" placeholder="Masukkan Hari" class="form-control">
				</div>

				<div class="form-group">
					<label>Tahun Ajaran</label>
					<input type="text" name="tahun_ajaran" placeholder="Masukkan Tahun Ajaran" class="form-control">
				</div>
				<input type="text" name="kelas">

				<div class="d-flex">
					<table class="table">
						<thead>
							<tr>
								<th>NO</th>
								<th>KELAS</th>
								<th>MATA PELAJARAN</th>
								<th>GURU</th>
								<th>JAM</th>			
							</tr>
						</thead>
						<tbody class="jadwalBody">
							<tr>
								<td>1</td>
								<td>
								</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="d-flex justify-content-center">
					<a href="#kelas" class="btn btn-info w-25" data-bs-toggle="modal" data-bs-target="#modalKelas">
						<i class="bi bi-file-earmark-plus text-white"></i>
					</a>
				</div>

			</div>
		</div>
		<button type="submit" class="btn btn-primary mb-5 mt-3">Simpan
		</button>
	</form>

	<!-- Modal Guru -->
	<div class="modal fade" id="modalKelas" tabindex="-1" aria-labelledby="listGuru" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="listGuru">Form Tambah Data</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<!-- Insert Data Form -->
					<form id="insertDataForm">
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label">Pilih Kelas</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="kelasText" readonly="true">
							</div>
							<button class="col-sm-1 btn btn-primary pil__kelas">
								<i class="bi bi-search"></i>
							</button>
						</div>
						<!-- class Selection Table -->
						<div class="kelas__list d-flex visually-hidden">
							<table class="table table-bordered table-striped table-hover">
								<tr>
									<td class="text-center">Nama Kelas</td>
									<td class="text-center"><i class="bi bi-check-circle"></i></td>
								</tr>
								<?php foreach ($kelas as $kls) : ?>
								<tr>
									<td><?= $kls['kode_kompetensi_keahlian'] ?></td>
									<td class="text-center">
										<div class="form-check">
											<input class="form-check-input" name="kelasRadio" data-kode="<?= $kls['kode_kompetensi_keahlian'] ?>" type="radio" value="<?= $kls['id_kompetensi_keahlian'] ?>">
										</div>
									</td>
								</tr>
								<?php endforeach; ?>
							</table>
							<button class="plus__kelas ml-2 btn btn-info align-self-center">+</button>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label">Pilih Mapel</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="mapelText" readonly="true">
							</div>
							<button class="col-sm-1 btn btn-primary pil__mapel">
								<i class="bi bi-search"></i>
							</button>
						</div>
						<!-- Mata Pelajaran Selection Table -->
						<div class="mapel__list d-flex visually-hidden">
							<table class="table table-bordered table-striped table-hover">
								<tr>
									<td class="text-center">Nama Mata Pelajaran</td>
									<td class="text-center"><i class="bi bi-check-circle"></i></td>
								</tr>
								<?php foreach ($mata_pelajaran as $mp) : ?>
								<tr>
									<td><?= $mp['kode_mata_pelajaran'] ?></td>
									<td class="text-center">
										<div class="form-check">
											<input class="form-check-input" name="mapelRadio" data-kode="<?= $mp['kode_mata_pelajaran'] ?>" type="radio" value="<?= $mp['id_mata_pelajaran'] ?>">
										</div>
									</td>
								</tr>
								<?php endforeach; ?>
							</table>
							<button class="plus__mapel ml-2 btn btn-info align-self-center">+</button>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label">Pilih Guru</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="guruText" readonly="true">
							</div>
							<button class="col-sm-1 btn btn-primary pil__guru">
								<i class="bi bi-search"></i>
							</button>
						</div>
						<!-- Teacher Selection Table -->
						<div class="guru__list visually-hidden">
							<div class="overflow-auto w-100 mb-2" style="height: 200px;">
								<table class="table table-bordered table-striped table-hover">
									<tr>
										<td class="text-center">Nama Guru</td>
										<td class="text-center"><i class="bi bi-check-circle"></i></td>
									</tr>
									<?php foreach ($guru as $gr) : ?>
									<tr>
										<td><?= $gr['nama_lengkap'] ?></td>
										<td class="text-center">
											<div class="form-check">
												<input class="form-check-input" name="guruRadio" data-kode="<?= $gr['nama_lengkap'] ?>" type="radio" value="<?= $gr['id_guru'] ?>">
											</div>
										</td>
									</tr>
									<?php endforeach; ?>
								</table>
							</div>
							<div class="d-flex justify-content-center mb-3">
								<button class="plus__guru btn btn-info w-25">+</button>
							</div>
						</div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label">Jam Pelajaran</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="jamText">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
					<button type="button" class="btn btn-primary" id="saveData" data-bs-dismiss="modal">Simpan</button>
				</div>
			</div>
		</div>
	</div>

</div>