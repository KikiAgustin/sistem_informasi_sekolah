<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {



	public function data_siswa()
	{
		$data ['judul'] = "Data Siswa";

		$this->load->model('Model_siswa') ;
		$data ['datasiswa'] = $this->Model_siswa->datasiswa();



		$this->load->view('template/header' , $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('data/datasiswa' , $data);
		$this->load->view('template/footer');
		
	}
	
	public function tambahdatasiswa()
	{
		
		$data ['judul'] = "Tambah Data Siswa";

		
		$this->form_validation->set_rules('nis','nis','required');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('ttl','ttl','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('jk','jk','required');
		$this->form_validation->set_rules('kelas','kelas','required');

		if($this->form_validation->run() == false ){
			
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('data/tambahdatasiswa', $data);
			$this->load->view('template/footer', $data);
		} 
		else {

			$nis = $this->input->post('nis');
			$nama = htmlspecialchars($this->input->post('nama'));
			$ttl = $this->input->post('ttl');
			$alamat = $this->input->post('alamat');
			$jk = $this->input->post('jk');
			$kelas = $this->input->post('kelas');

			$data = [
				'nis' => $nis,
				'nama' => $nama,
				'ttl'  => $ttl,
				'alamat'  => $alamat,
				'jk'  => $jk,
				 'kelas'  => $kelas
			];

			$this->db->insert('tb_siswa', $data);
			// $this->session->set_flashdata()
			redirect('Data/data_siswa');

			// $this->Model_siswa->tambahdatasiswa();
			// redirect('Data/data_siswa');


		}

		

}

public function edit_datasiswa($id_siswa)
		{
			$data ['judul'] = "Edit Data Siswa";
			$this->load->model('Model_siswa');

			$data['getsiswa'] = $this->Model_siswa->getidsiswa($id_siswa);

			$this->form_validation->set_rules('nis','nis','required');
			$this->form_validation->set_rules('nama','nama','required');
			$this->form_validation->set_rules('ttl','ttl','required');
			$this->form_validation->set_rules('alamat','alamat','required');
			$this->form_validation->set_rules('jk','jk','required');
			$this->form_validation->set_rules('kelas','kelas','required');

			if($this->form_validation->run() == false ){
				

			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('data/edit_datasiswa', $data);
			$this->load->view('template/footer', $data);

		}

		else {

			$nis = $this->input->post('nis');
			$nama = htmlspecialchars($this->input->post('nama'));
			$ttl = $this->input->post('ttl');
			$alamat = $this->input->post('alamat');
			$jk = $this->input->post('jk');
			$kelas = $this->input->post('kelas');

			$data = [
				'nis' => $nis,
				'nama' => $nama,
				'ttl'  => $ttl,
				'alamat'  => $alamat,
				'jk'  => $jk,
				 'kelas'  => $kelas
			];

			
			$this->db->where('id_siswa', $this->input->post('id_siswa'));
			$this->db->update('tb_siswa', $data);
			// $this->session->set_flashdata()
			redirect('Data/data_siswa');

			// $this->Model_siswa->tambahdatasiswa();
			// redirect('Data/data_siswa');


		}

		
		


	}

	public function hapus_datasiswa($id_siswa){
		$this->db->delete('tb_siswa', ['id_siswa' => $id_siswa]);
		redirect('Data/data_siswa');
			
		}


public function data_guru()
	{
		$data ['judul'] = "Data Guru";

		$this->load->model('Model_siswa') ;
		$data ['dataguru'] = $this->Model_siswa->dataguru();


		$this->load->view('template/header' , $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('data/dataguru');
		$this->load->view('template/footer');
		
	}

	



}