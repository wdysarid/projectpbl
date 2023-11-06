<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
		integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<title>Dashboard Admin</title>
	<style>
		.container {
			margin-top: 30px;

		}

	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #90B8F8;">
		<a class="navbar-brand"><img src="<?php echo base_url('assets/img/logo.png'); ?>" width="30" height="30"
				class="d-inline-block align-top" alt=""> Dashboard</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#" aria-controls="homeMenu"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="homeMenu">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url('Cadmin/admin')?>">Home</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
						aria-expanded="false">
						Master Data
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo base_url('cjurusan/tampil') ?>">Data Jurusan</a>
						<a class="dropdown-item" href="<?php echo base_url('cprodi/tampil') ?>">Data Program Studi</a>
						<div class="dropdown-divider"></div>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
						aria-expanded="false">
						Data Pendaftaran
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Jadwal Pendaftaran</a>
						<a class="dropdown-item" href="#">Data Calon Mahasiswa</a>
						<div class="dropdown-divider"></div>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('Cadmin/laporandata')?>">Laporan Data</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url('cadmin/logout'); ?>"><span
							class="btn btn-outline-danger my-2 my-sm-0">LOGOUT</span></a></li>

			</ul>
		</div>
	</nav>

	<div class="container">
		<h3>Halo, <?php echo $this->session->userdata('NamaLengkap'); ?></h3>
		<p>Selamat Datang di Sistem Pendaftaran Mahasiswa Baru</p>

		<?php
		if(empty($konten))
		{
			echo "";  
		}
		else
		{
			echo $konten;   
		}
		?>
		
		<?php
		if(empty($table))
		{
			echo "";  
		}
		else
		{
			echo $table;   
		}
		?>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
	</script>

	<script>
		function tampil() {
			var konfirmasi = confirm("Apakah Anda yakin ingin logout?");
			if (konfirmasi) {
				// Jika pengguna mengonfirmasi logout, maka arahkan ke halaman logout
				window.location.href = "<?php echo base_url('ctampil/tampil'); ?>";
			}
		}

	</script>
</body>

</html>
