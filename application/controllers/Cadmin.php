<?php
	class Cadmin extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('mvalidasi');
			$this->mvalidasi->validasi();
		}
		
		function admin()
		{
			$this->load->view('admin_view');	
		}	

		
		function logout()
		{
			$this->session->sess_destroy();
			redirect('ctampil/tampil','refresh');	
		}
	}
?>