<h3>Daftar Data Prodi</h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Prodi</th>
        <th>Jurusan</th>
        <th>Jenjang</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
		if(empty($hasil))
		{
			echo "Data kosong";
		}
		else
		{
			$no=1;
			foreach ($hasil as $data):
	?>	
    
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data->NamaProdi;  ?></td>
        <td><?php echo $data->Jurusan; ?></td>
        <td><?php echo $data->Jenjang; ?></td>
        <td>
        	<button type="button" class="btn btn-sm btn-primary">Edit</button>
          <button type="button" onclick="hapusdata('<?php echo $data->KodeProdi ?>');" class="btn btn-sm btn-danger">Hapus</button>

        </td>
      </tr>
      
     <?php
	 		$no++;
	 		endforeach;
		}
	 ?>
    </tbody>
  </table>
  <script language="javascript">
  	function hapusdata(KodeProdi)
	{
		if(confirm("Apakah yakin menghapus data ini?"))
		{
			//alert (KodeProdi);	
			window.open("<?php echo base_url(); ?>cprodi/hapusdata/"+KodeProdi,"_self");
		}	
	}
  </script>
