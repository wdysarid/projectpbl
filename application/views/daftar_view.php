<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Register</title>
</head>

<body>
	<div class="container" style="margin-top: 80px;">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card">
					<div class="card-header" style="background-color: #90B8F8;">
						<div class="text-center">
							<h3><b>REGISTER AKUN</b></h3>
						</div>
					</div>
					<div class="card-body">
						<form name="daftar" method="post" action="<?php echo base_url('cdaftar/simpandaftar');?>">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" name="NamaLengkap" placeholder="Nama Lengkap" class="form-control">
							</div>
							<div class="form-group">
								<label>No. Telepon</label>
								<input type="text" name="Telp" placeholder="No. Telepon" class="form-control">
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="Alamat" placeholder="Alamat" class="form-control">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="Email" placeholder="Email" class="form-control">
							</div>
							<div style="text-align: center;">
								<button type="submit" class="btn btn-primary">Simpan Data</button>
								<button type="button" class="btn btn-success" onClick="tampil()">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function tampil() {
			window.open("<?php echo base_url('ctampil/tampil'); ?>", "_self");
		}

	</script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
