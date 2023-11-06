<br />
<div class="card-header" style="background-color: #;">
	<div class="text-left">
		<h3>Daftar Data Jurusan</h3>
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

	<form name="daftar" method="post" action="<?php echo base_url('cjurusan/simpanjurusan');?>">
		<div class="form-group">
			<label>Nama Jurusan</label>
			<input type="text" name="NamaJurusan" class="form-control">
		</div>
		<div class="form-group">
			<label>Nomor SK Jurusan</label>
			<input type="text" name="NoSKJurusan" class="form-control">
		</div>
		<div class="form-group">
			<label>Kepala Jurusan</label>
			<input type="text" name="Kajur" class="form-control">
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
