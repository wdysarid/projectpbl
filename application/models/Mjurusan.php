<?php
    class Mjurusan extends CI_Model{
        //fungsi simpan
        function simpanjurusan()
        {
            $data=$_POST;
            $this->db->insert('tbjurusan',$data);
            $this->session->set_flashdata('pesan','Data berhasil disimpan');
            redirect('cjurusan/tampil','refresh');
        }
        
        //fungsi tampil
        function tampildata()
		{
			$sql="select * from tbjurusan";
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
		function hapusdata($KodeJurusan)
		{
			$sql="delete from tbjurusan where KodeJurusan='".$KodeJurusan."'";
			$this->db->query($sql);
			redirect('cjurusan/tampil','refresh');	
		}

    }
?>
