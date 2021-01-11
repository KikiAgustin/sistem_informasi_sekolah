<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{



	public function index()
	{
		$data['judul'] = "Dashboarde";
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('template/footer');
	}
}
