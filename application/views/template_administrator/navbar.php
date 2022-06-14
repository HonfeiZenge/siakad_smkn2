<div class="d-flex mw-100 overflow-hidden">
	<!-- Sidebar -->
	
	<div class="min-vh-100" style="width: 280px; background: #0a5c87;">
		
		<div class="p-2 text-center">
			<a class="text-decoration-none fs-5 text-white">SISFO AKADEMIK</a>
			<hr class="text-white">
		</div>

		<div>
			<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

	            <li class="nav-item p">
	                <a class="nav-link" href="<?= base_url('administrator/dashboard') ?>">
	                    <i class="text-white bi bi-speedometer2"></i>
	                    <span>Dashboard</span></a>
	            </li>
	          
	            <!-- Nav Item - Pages Collapse Menu -->
	            <li class="nav-item">
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
	            </li>

	            <!-- Nav Item - Utilities Collapse Menu -->
	            <li class="nav-item">
	                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataSiswa"
	                    aria-expanded="true" aria-controls="dataSiswa">
	                    <i class="bi bi-people-fill"></i>
	                    <span>Data Siswa</span>
	                </a>
	                <div id="dataSiswa" class="collapse" aria-labelledby="headingUtilities"
	                    data-parent="#accordionSidebar">
	                    <div class="bg-white py-2 collapse-inner rounded">
	                        <a class="collapse-item" href="<?php echo base_url('administrator/siswa') ?>">Data Siswa</a>
					        <a class="collapse-item" href="<?php echo base_url('administrator/siswa/create') ?>">Tambah Data Siswa</a>
	                    </div>
	                </div>
	            </li>

	            <li class="nav-item">
	                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataGuru"
	                    aria-expanded="true" aria-controls="dataGuru">
	                    <i class="bi bi-person-fill"></i>
	                    <span>Data Guru</span>
	                </a>
	                <div id="dataGuru" class="collapse" aria-labelledby="headingUtilities"
	                    data-parent="#accordionSidebar">
	                    <div class="bg-white py-2 collapse-inner rounded">
	                        <a class="collapse-item" href="<?php echo base_url('administrator/guru') ?>">Data Guru</a>
					        <a class="collapse-item" href="<?php echo base_url('administrator/guru/create') ?>">Tambah Data Guru</a>
					        <a class="collapse-item" href="<?php echo base_url('administrator/guru/edit') ?>">Edit Data Guru</a>
	                    </div>
	                </div>
	            </li>

	             <li class="nav-item">
	                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataKelas"
	                    aria-expanded="true" aria-controls="dataKelas">
	                    <i class="bi bi-grid-1x2 me-1"></i>
	                    <span>Data Kelas</span>
	                </a>
	                <div id="dataKelas" class="collapse" aria-labelledby="headingUtilities"
	                    data-parent="#accordionSidebar">
	                    <div class="bg-white py-2 collapse-inner rounded">
	                        <a class="collapse-item" href="<?php echo base_url('administrator/kelas') ?>">Data Kelas</a>
					        <a class="collapse-item" href="<?php echo base_url('administrator/kelas/create') ?>">Tambah Data Kelas</a>
					        <a class="collapse-item" href="<?php echo base_url('administrator/kelas/update') ?>">Edit Data Kelas</a>
	                    </div>
	                </div>
	            </li>

	             <li class="nav-item">
	                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataJadwal"
	                    aria-expanded="true" aria-controls="dataJadwal">
	                    <i class="bi bi-calendar2"></i>
	                    <span>Jadwal Pelajaran Siswa</span>
	                </a>
	                <div id="dataJadwal" class="collapse" aria-labelledby="headingUtilities"
	                    data-parent="#accordionSidebar">
	                    <div class="bg-white py-2 collapse-inner rounded">
	                        <a class="collapse-item" href="<?php echo base_url('administrator/jadwal_pelajaran') ?>">Data Jadwal Pelajaran </a>
					        <a class="collapse-item" href="<?php echo base_url('administrator/jadwal_pelajaran/create') ?>">Tambah Jadwal Pelajaran</a>
					        <a class="collapse-item" href="<?php echo base_url('administrator/jadwal_pelajaran/edit') ?>">Edit Jadwal Pelajaran</a>
	                    </div>
	                </div>
	            </li>

				  <li class="nav-item">
	                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataMengajar"
	                    aria-expanded="true" aria-controls="dataMengajar">
	                    <i class="bi bi-journal-text"></i>
	                    <span>Jadwal Mengajar Guru</span>
	                </a>
	                <div id="dataMengajar" class="collapse" aria-labelledby="headingUtilities"
	                    data-parent="#accordionSidebar">
	                    <div class="bg-white py-2 collapse-inner rounded">
	                        <a class="collapse-item" href="<?php echo base_url('administrator/jadwal_mengajar') ?>">Data Jadwal Mengajar </a>
					        <a class="collapse-item" href="<?php echo base_url('administrator/jadwal_mengajar/create') ?>"> Tambah Jadwal Mengajar</a>
					        <a class="collapse-item" href="<?php echo base_url('administrator/jadwal_mengajar/edit') ?>"> Edit Jadwal Mengajar</a>
	                    </div>
	                </div>
	            </li>

	            <li class="nav-item">
	                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataAbsensi"
	                    aria-expanded="true" aria-controls="dataJadwal">
	                    <i class="bi bi-list-check"></i>
	                    <span>Absensi Siswa</span>
	                </a>
	                 <div id="dataAbsensi" class="collapse" aria-labelledby="headingUtilities"
	                    data-parent="#accordionSidebar">
	                    <div class="bg-white py-2 collapse-inner rounded">
	                        <a class="collapse-item" href="<?php echo base_url('administrator/absensi_harian') ?>">Absen Kelas Harian </a>
					        <a class="collapse-item" href="<?php echo base_url('administrator/absensi_mata_pelajaran') ?>">Absen Mata Pelajaran</a>
					        
	                    </div>
	                </div>
	            </li>	 

	             

	            <li class="nav-item p">
	                <a class="nav-link" href="<?php echo base_url('administrator/laporan_nilai_siswa') ?>">
	                    <i class="bi bi-postcard"></i>
	                    <span>Laporan Nilai Siswa</span></a>
	            </li>

	            <!-- <li class="nav-item">
	                <a class="nav-link" href="">
	                   <i class="bi bi-box-arrow-right"></i>
	                    <span>Logout</span></a>
	           	 
	            </li>  --> 

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
