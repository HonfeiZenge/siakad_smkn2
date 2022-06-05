<div class="container-fluid p-3">
	
 	<div class="alert" role="alert" style="background: #9ec5fe;">
        <i class="bi bi-grid-1x2 me-1"></i> Kelas
   	</div>	

	<a href="<?php echo base_url()?>administrator/kelas/create" class="btn btn-success mb-3">
		<i class="bi bi-plus-circle"></i>
		Tambah Kelas
	</a>

	<table class="table table-bordered table-striped table-hover">
   			<tr>
   				<th>NO</th>
   				<th>JENJANG KELAS</th>
   				<th>KOMPETENSI KEAHLIAN</th>
   				<th>WALI KELAS</th>
				<th>INDEKS KELAS</th>
				<th>JUMLAH MURID</th>
   				<th colspan="3">AKSI</th>
   			</tr>
			<?php foreach ($kelas as $key => $val) : ?>
   			<tr>
				<td><?= $key+=1 ?></td>
   				<td><?= $val['jenjang_kelas'] ?></td>
   				<td><?= $val['nama_kompetensi_keahlian'] ?></td>
   				<td><?= $val['nama_lengkap'] ?></td>
   				<td><?= $val['index_kelas'] ?></td>
   				<td><?= $val['jumlah_murid'] ?></td>
				<td>
					<a href="<?= base_url() ?>administrator/kelas/update/<?= $val['id_kelas'] ?>" class="btn btn-primary">
						<i class="bi bi-pencil-square"></i>
					</a>
					<a href="<?= base_url() ?>administrator/kelas/delete/<?= $val['id_kelas'] ?>"
					class="btn btn-danger"
					onclick="return confirm('Are you sure you want to delete ?')">
						<i class="bi bi-trash3-fill"></i>
					</a>
				</td>
   			</tr>
			<?php endforeach; ?>

   			
   	</table>

</div>