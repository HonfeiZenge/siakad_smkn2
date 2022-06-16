<div class="container-fluid p-3">
	
 	<div class="alert" role="alert" style="background: #9ec5fe;">
        <i class="bi bi-grid-1x2 me-1"></i> Menu Management
   	</div>	

	<a href="<?php echo base_url()?>" class="btn btn-success mb-3">
		<i class="bi bi-plus-circle"></i>
		Tambah Menu
	</a>

	<table class="table table-bordered table-striped table-hover">
   			<tr>
   				<th>NO</th>
   				<th>NAMA MENU</th>
   				<th colspan="2">AKSI</th>
   			</tr>
			<?php foreach ($menu as $key => $val) : ?>
   			<tr>
				<td><?= $key+=1 ?></td>
   				<td><?= $val['menu'] ?></td>
   				<td>
                   <a href="<?= '#'?>" class="btn btn-primary">
						<i class="bi bi-pencil-square"></i>
					</a>
					<a href="<?= '#'?>"
					class="btn btn-danger"
					onclick="return confirm('Are you sure you want to delete ?')">
						<i class="bi bi-trash3-fill"></i>
					</a>
                </td>
   			</tr>
			<?php endforeach; ?>
   	</table>

</div>