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
	                <a class="nav-link" href="">
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
	                        <a class="collapse-item" href="">Profil Sekolah</a>
					        <a class="collapse-item" href="">Tahun Ajaran</a>
					        <a class="collapse-item" href="">Jurusan</a>
					        <a class="collapse-item" href="">Mata Pelajaran</a>
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
	                        <a class="collapse-item" href="">Data Jadwal Pelajaran </a>
					        <a class="collapse-item" href="">Tambah Jadwal Pelajaran</a>
					        <a class="collapse-item" href="">Edit Jadwal Pelajaran</a>
	                    </div>
	                </div>
	            </li>     

	            <li class="nav-item p">
	                <a class="nav-link" href="">
	                    <i class="bi bi-postcard"></i>
	                    <span>Laporan Nilai Siswa</span></a>
	            </li>

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
			  	Siswa
			  </button>
			  <ul class="dropdown-menu">
			    <li><button class="dropdown-item" type="button"></button></li>
			    <li><a href="<?= base_url('auth/logout'); ?>" class="dropdown-item" type="button">Log out</a></li>
			  </ul>
			</div>

		  </div>
		 
		</nav>
