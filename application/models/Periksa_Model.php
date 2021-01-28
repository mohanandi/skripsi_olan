<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periksa_Model extends CI_Model
{
    public function getFirstQuestion()
    {
        return $this->db->get_where('pertanyaan', ['pertanyaan_pertama' => '1'])->row_array();
    }
    public function getQuestionBykode($kode)
    {
        return $this->db->get_where('pertanyaan', ['kode' => $kode])->row_array();
    }
    public function getSolutionByKode($kode)
    {
        return $this->db->get_where('solusi', ['kode' => $kode])->row_array();
    }
}
