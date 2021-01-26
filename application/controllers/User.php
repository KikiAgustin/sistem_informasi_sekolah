<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {

        $id_visi = "1";
        $data['visi'] = $this->db->get_where('tb_misivisi', ['id_misi' => $id_visi])->row_array();

        $this->load->view('user/index', $data);
    }

    public function sejarah()
    {
        $data = [
            'judul' => "SMP Pangeran Diponegora | Sejarah"
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/sejarah');
        $this->load->view('user/template/footer');
    }


    public function visi()
    {
        $data = [
            'judul' => "SMP Pangeran Diponegora | Visi & Misi"
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/visi');
        $this->load->view('user/template/footer');
    }
    public function struktur()
    {
        $data = [
            'judul' => "SMP Pangeran Diponegora | Struktur Organisasi"
        ];

        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar');
        $this->load->view('user/struktur');
        $this->load->view('user/template/footer');
    }
}
