<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periksa_Model extends CI_Model
{
    public function getFirstQuestion()
    {
        return $this->db->get_where('pertanyaan', ['pertanyaan_pertama' => '1'])->row_array();
    }
}
