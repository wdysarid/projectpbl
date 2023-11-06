<br />
<div class="card-header" style="background-color: #;">
	<div class="text-left">
		<h3>Daftar Data Prodi</h3>
	</div>
</div>
<div class="card-body">
<?php
		$pesan=$this->session->flashdata('pesan');
		if ($pesan=="")
		{
			echo "";	
		}
		else
		{
	?>
         <div class="alert alert-success alert-dismissible">
               <?php echo $pesan; ?>                        
      	 </div>
      <?php
		}
	  ?>

	<form name="daftar" method="post" action="<?php echo base_url('cprodi/simpanprodi');?>">
		<div class="form-group">
			<label>Nama Prodi</label>
			<input type="text" name="NamaProdi" class="form-control">
		</div>
		<div class="form-group">
			<label for="Jurusan">Jurusan</label>
			<select class="form-control" name="Jurusan">
				<option selected disabled>== PILIH ==</option>
				<option>Teknik Sipil</option>
				<option>Teknik Elektro</option>
				<option>Teknik Mesin</option>
				<option>Administrasi Bisnis</option>
				<option>Akuntansi</option>
                <option>Pariwisata</option>
			</select>
		</div>
        <div class="form-group">
			<label for="Jenjang">Jenjang</label>
			<select class="form-control" name="Jenjang">
				<option selected disabled>== PILIH ==</option>
				<option>D3</option>
				<option>D4 / S1 Terapan</option>
				<option>S2</option>
			</select>
		</div>
		<div class="form-group">
			<label>Nomor SK Prodi</label>
			<input type="text" name="NoSKProdi" class="form-control">
		</div>
		<div class="form-group">
			<label>Kepala Prodi</label>
			<input type="text" name="Kaprodi" class="form-control">
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<input type="text" name="Keterangan" class="form-control">
		</div>
		<div style="text-align: right;">
			<button type="submit" class="btn btn-primary">Simpan</button>
			<button type="reset" class="btn btn-danger">Batal</button>
		</div>
	</form>
</div>
