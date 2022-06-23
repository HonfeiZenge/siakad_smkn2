<div class="d-flex mw-100 overflow-hidden">
	<!-- Sidebar -->

	<div class="min-vh-100" style="width: 280px; background: #0a5c87;">

		<div class="p-2 text-center">
			<a class="text-decoration-none fs-5 text-white">SISFO AKADEMIK</a>
			<hr class="text-white">
		</div>

		<div>
			<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

				<!-- SIdebar Contents -->
				<?php
					$role_id = $this->session->userdata('role_id');
					$queryMenu = "SELECT user_menu.id, menu
					FROM user_menu JOIN user_access_menu
					ON user_menu.id = user_access_menu.menu_id
					WHERE user_access_menu.role_id = $role_id
					ORDER BY user_access_menu.menu_id ASC";

					$menu = $this->db->query($queryMenu)->result_array();
				?>

				<?php foreach ($menu as $list) : ?>

					<?php
						$menuId = $list['id'];
						$querySubMenu = "SELECT *
						FROM user_sub_menu JOIN user_menu
						ON user_sub_menu.menu_id = user_menu.id
						WHERE user_sub_menu.menu_id = $menuId
						AND user_sub_menu.is_active = 1";

						$subMenu = $this->db->query($querySubMenu)->result_array();
					?>

					<?php foreach ($subMenu as $sm) : ?>
						<?php if($judul == $sm['title']): ?>
							<li class="nav-item active">
						<?php else : ?>
							<li class="nav-item">
						<?php endif; ?>
							<a class="nav-link" href="<?= base_url($sm['url']); ?>">
								<i class="text-white <?= $sm['icon'] ?>"></i>
								<span><?= $sm['title']; ?></span></a>
						</li>
					<?php endforeach; ?>

	            <!-- <li class="nav-item">
	                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataMaster"
	                    aria-expanded="true" aria-controls="dataMaster">
	                    <i class="bi bi-collection"></i>
	                    <span>Data Master</span>
	                </a>
	                <div id="dataMaster" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
	                    <div class="bg-white py-2 collapse-inner rounded">
	                        <a class="collapse-item" href="<?php echo base_url('administrator/profil_sekolah') ?>">Profil Sekolah</a>
					        <a class="collapse-item" href="<?php echo base_url('administrator/tahun_ajaran') ?>">Tahun Ajaran</a>
					        <a class="collapse-item" href="<?php echo base_url('administrator/jurusan') ?>">Jurusan</a>
					        <a class="collapse-item" href="<?php echo base_url('administrator/mata_pelajaran') ?>">Mata Pelajaran</a>
	                    </div>
	                </div>
	            </li> -->
				<?php endforeach; ?>

	        </ul>
		</div>

	</div>

	<!-- Content Wrapper -->
	<div class="w-100 align-self-start">
		<nav class="navbar navbar-dark" style="background-color: #adb5bd;">
		  <div class="container-fluid d-flex position-relative  justify-content-between">
		  	<div class="d-flex">
		  		<a class="navbar-brand">SMK NEGERI 2 PURWAKARTA</a>

			    <form>
			    	<div class="d-flex position-relative">
			      		<input class="form-control me-2 position-relative start-0" type="search" placeholder="Search" aria-label="Search">
			      		<button class="btn btn-dark position-relative start-0" type="submit">Search</button>
			      	</div>
			    </form>
		  	</div>
			<?php
				$user = $this->db->get_where('user', ['username' =>
				$this->session->userdata('username')])->row_array();
			?>
		  	<div class="btn-group">
			  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
				<?= $user['username'] ?>
			  </button>
			  <ul class="dropdown-menu">
			    <li><button class="dropdown-item" type="button"><?= $user['username'] ?></button></li>
			    <li><a href="<?= base_url('auth/logout'); ?>" class="dropdown-item" type="button">Log out</a></li>
			  </ul>
			</div>

		  </div>

		</nav>
