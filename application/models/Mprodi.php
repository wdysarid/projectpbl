<?php
    class Mprodi extends CI_Model{
        //fungsi simpan
        function simpanprodi()
        {
            $data=$_POST;
            $this->db->insert('tbprodi',$data);
            $this->session->set_flashdata('pesan','Data berhasil disimpan');
            redirect('cprodi/tampil','refresh');
        }
        
        //fungsi tampil
        function tampildata()
		{
			$sql="select * from tbprodi";
			$query=$this->db->query($sql);
			if ($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{
					$hasil[]=$row;
				}	
			}
			else
			{
				$hasil="";	
			}
			return $hasil;	
		}

		//fungsi hapus data
		function hapusdata($KodeProdi)
		{
			$sql="delete from tbprodi where KodeProdi='".$KodeProdi."'";
			$this->db->query($sql);
			redirect('cprodi/tampil','refresh');	
		}


    }
?>
