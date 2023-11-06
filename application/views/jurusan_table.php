<h3>Daftar Data Jurusan</h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Jurusan</th>
        <th>Kepala Jurusan</th>
        <th>Keterangan</th>
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
        <td><?php echo $data->NamaJurusan;  ?></td>
        <td><?php echo $data->Kajur; ?></td>
        <td><?php echo $data->Keterangan; ?></td>
        <td>
        	<button type="button" class="btn btn-sm btn-primary">Edit</button>
            <button type="button" onclick="hapusdata('<?php echo $data->KodeJurusan ?>');" class="btn btn-sm btn-danger">Hapus</button>
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
  	function hapusdata(KodeJurusan)
	{
		if(confirm("Apakah yakin menghapus data ini?"))
		{
			//alert (KodeJurusan);	
			window.open("<?php echo base_url(); ?>cjurusan/hapusdata/"+KodeJurusan,"_self");
		}	
	}
  </script>