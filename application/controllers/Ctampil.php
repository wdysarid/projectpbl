<?php
	class Ctampil extends CI_Controller
	{
		function landingpage()
		{
			$this->load->view('home_view');	
		}
		
		function daftar()
		{
			$this->load->view('daftar_view');	
		}

		function proseslogin()
		{
			$this->load->model('mlogin');
			$this->mlogin->proseslogin();	
		}
	}
?>