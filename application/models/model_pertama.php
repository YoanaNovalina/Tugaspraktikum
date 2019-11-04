<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_pertama extends CI_Model{

    public function getdata()
    {
        return $this->db->get('anggota')->result();
    }
}