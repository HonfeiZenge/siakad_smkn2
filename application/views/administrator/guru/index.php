<div class="container-fluid p-3">
	
	<?php if ($this->session->flashdata('message')) : ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong><?= $this->session->flashdata('message'); ?></strong>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	<?php endif; ?>

 	<div class="alert" role="alert" style="background: #9ec5fe;">
        <i class="bi bi-person-fill"></i> Guru
		<a href="<?php echo base_url(); ?>administrator/guru/create">go to add</a>
   	</div>

	<table class="table table-bordered table-striped table-hover">
   			<tr>
   				<th>NO</th>
   				<th>NIP</th>
               	<th>NUPTK</th>
   				<th>NAMA GURU</th>
               	<th>MATA PELAJARAN</th>
   				<th>ALAMAT</th>
   				<th class="text-center" colspan="2">AKSI</th>
   			</tr>
			<?php foreach ($guru as $key => $gr) : ?>
			<tr>
				<td><?= $key + 1; ?></td>
				<td><?= $gr['nip']; ?></td>
				<td><?= $gr['nuptk']; ?></td>
				<td><?= $gr['nama_lengkap']; ?></td>
				<td><?= $gr['jenis_kelamin']; ?></td>
				<td><?= $gr['alamat']; ?></td>
				<td class="text-center" colspan="2">
					<a href="<?php echo base_url(); ?>administrator/guru/edit/<?= $gr['id_guru'] ?>" class="btn btn-primary">
						<i class="bi bi-pencil-square"></i>
					</a>
					<a href="<?php echo base_url(); ?>administrator/guru/delete/<?= $gr['id_guru'] ?>"
					class="btn btn-danger"
					onclick="return confirm('Are you sure you want to delete ?')">
						<i class="bi bi-trash3-fill"></i>
					</a>
				</td>
			</tr>
			<?php endforeach; ?>
            
      </table>

</div>