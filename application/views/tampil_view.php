<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Login</title>
</head>

<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card">
					<div class="card-header" style="background-color: #90B8F8;">
						<div class ="text-center" >
							<h3><b>LOGIN</b></h3>
						</div>
					</div>
					<?php
						$pesan=$this->session->flashdata('pesan');
						if ($pesan=="")
						{
							echo "";	
						}
						else
						{
					?>
						<div class="alert alert-danger alert-dismissible">
							<?php echo $pesan; ?>                        
						</div>
					<?php
						}
					?>
					<div class="card-body">
						<form name="formlogin" method="post" action="<?php echo base_url('ctampil/proseslogin') ?>">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="Username" placeholder="username" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="Password" placeholder="password" class="form-control">
							</div>
							<div style="text-align: center;">
								<button type="submit" class="btn btn-primary">Login</button>
								<button type="button" class="btn btn-success" onClick="daftar()">Daftar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<script>
			function daftar() {
				window.open("<?php echo base_url('ctampil/daftar'); ?>", "_self");
			}
		</script>
</body>
</html>
