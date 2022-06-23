<div class="container-fluid p-3">

	<?php if ($this->session->flashdata('message')) : ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong><?= $this->session->flashdata('message'); ?></strong>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	<?php endif; ?>

 	<div class="alert" role="alert" style="background: #9ec5fe;">
        <i class="bi bi-person-fill"></i> User
		<a href="<?php echo base_url(); ?>administrator/user_management/create">go to add</a>
   	</div>

	<table class="table table-bordered table-striped table-hover">
   			<tr>
   				<th>NO</th>
          <th>USERNAME</th>
   				<th>ROLE</th>
          <th>STATUS</th>
   				<th class="text-center" colspan="2">AKSI</th>
   			</tr>
			<?php foreach ($user as $key => $usr) : ?>
			<tr>
				<td><?= $key + 1; ?></td>
				<td><?= $usr['username']; ?></td>
				<td><?= $usr['role']; ?></td>
				<td>
          <?php
            if($usr['is_active']) echo 'Aktif';
            else echo 'Non aktif';
          ?>
        </td>
				<td class="text-center" colspan="2">
					<a href="<?php echo base_url(); ?>administrator/guru/edit/<?= $usr['id_user'] ?>" class="btn btn-primary">
						<i class="bi bi-pencil-square"></i>
					</a>
					<a href="<?php echo base_url(); ?>administrator/guru/delete/<?= $usr['id_user'] ?>"
					class="btn btn-danger"
					onclick="return confirm('Are you sure you want to delete ?')">
						<i class="bi bi-trash3-fill"></i>
					</a>
				</td>
			</tr>
			<?php endforeach; ?>

      </table>

</div>
