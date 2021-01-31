<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
	public function data_siswa()
	{
		$data['judul'] = "Data Siswa";

		$this->load->model('Model_siswa');
		$data['datasiswa'] = $this->Model_siswa->datasiswa();

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('data/datasiswa', $data);
		$this->load->view('template/footer');
	}

	public function tambahdatasiswa()
	{

		$data['judul'] = "Tambah Data Siswa";

		$this->load->view('template/header', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('data/tambahdatasiswa', $data);
		$this->load->view('template/footer', $data);

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
		// redirect('Data/data_siswa')



	}

	public function edit_datasiswa($id_siswa)
	{
		if (isset($_POST['submit'])) {

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
		} else {
			$data['judul'] = "Edit Data Siswa";
			$this->load->model('Model_siswa');

			$data['getsiswa'] = $this->Model_siswa->getidsiswa($id_siswa);

			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('data/edit_datasiswa', $data);
			$this->load->view('template/footer', $data);
		}
	}

	public function hapus_datasiswa($id_siswa)
	{
		$this->db->delete('tb_siswa', ['id_siswa' => $id_siswa]);
		redirect('Data/data_siswa');
	}


	public function data_guru()
	{
		$data['judul'] = "Data Guru";

		$this->load->model('Model_guru');
		$data['dataguru'] = $this->Model_guru->dataguru();


		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('data/dataguru');
		$this->load->view('template/footer');
	}
	public function tambahdataguru()
	{

		$data['judul'] = "Tambah Data guru";

		$this->form_validation->set_rules('nip', 'nip', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('pendidikan', 'pendidikan', 'required');
		$this->form_validation->set_rules('mapel', 'mapel', 'required');

		if ($this->form_validation->run() == false) {

			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('data/tambahdataguru', $data);
			$this->load->view('template/footer', $data);
		} else {

			$nip = $this->input->post('nip');
			$nama = htmlspecialchars($this->input->post('nama'));
			$alamat = $this->input->post('alamat');
			$pendidikan = $this->input->post('pendidikan');
			$mapel = $this->input->post('mapel');

			$data = [
				'nip' => $nip,
				'nama' => $nama,
				'alamat'  => $alamat,
				'pendidikan'  => $pendidikan,
				'mapel'  => $mapel
			];

			$this->db->insert('tb_guru', $data);
			// $this->session->set_flashdata()
			redirect('Data/data_guru');

			// $this->Model_guru->tambahdataguru();
			// redirect('Data/data_guru');


		}
	}

	public function edit_dataguru($id_guru)
	{
		if (isset($_POST['submit'])) {

			$nip = $this->input->post('nip');
			$nama = htmlspecialchars($this->input->post('nama'));
			$alamat = $this->input->post('alamat');
			$pendidikan = $this->input->post('pendidikan');
			$mapel = $this->input->post('mapel');

			$data = [
				'nip' => $nip,
				'nama' => $nama,
				'ttl'  => $ttl,
				'alamat'  => $alamat,
				'pendidikan'  => $pendidikan,
				'mapel'  => $mapel
			];


			$this->db->where('id_guru', $this->input->post('id_guru'));
			$this->db->update('tb_guru', $data);
			// $this->session->set_flashdata()
			redirect('Data/data_guru');
		} else {
			$data['judul'] = "Edit Data guru";
			$this->load->model('Model_guru');

			$data['getidguru'] = $this->Model_guru->getidguru($id_guru);
			$this->load->view('template/header', $data);
			$this->load->view('template/topbar', $data);
			$this->load->view('template/sidebar', $data);
			$this->load->view('data/edit_dataguru', $data);
			$this->load->view('template/footer', $data);
		}
	}

	public function hapus_dataguru($id_guru)
	{
		$this->db->delete('tb_guru', ['id_guru' => $id_guru]);
		redirect('Data/data_guru');
	}
}
