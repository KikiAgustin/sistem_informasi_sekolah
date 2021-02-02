<?php
public function sejarah()
	{
		$data['judul'] = "sejarah";
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('tentangkami/sejarah', $data);
		$this->load->view('template/footer');
    }
    ?>