<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_sejarah extends CI_Model
{

    public function Sejarah()
    {
        return $this->db->get('tb_sejarah')->result_array();
    }