<?php
	class Mlogin extends CI_Model
	{
		function proseslogin()
		{
			$Username=$this->input->post('Username');
			$Password=$this->input->post('Password');
			
			$sql="select * from tbdaftar where Email='".$Username."' ";
			$sql.="and Password='".$Password."'";
			$query=$this->db->query($sql);
			if($query->num_rows()>0)
			{
				//session
				$data=$query->row();
				$array=array(
					'KodeDaftar'=>$data->KodeDaftar,
					'NamaLengkap'=>$data->NamaLengkap
				);	
				$this->session->set_userdata($array);	
				redirect('cadmin/admin','refresh');
			}
			else
			{
				$this->session->set_flashdata('pesan','Login gagal, username dan password salah!');
				redirect('ctampil/tampil','refresh');	
			}
				
		}	
	}
?>