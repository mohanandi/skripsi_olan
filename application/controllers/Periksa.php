<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periksa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Periksa_Model');
    }

    public function index()
    {
        $this->load->view('periksa_gitar');
    }
    public function pemeriksaan($kode)
    {
        if ($kode == 'mulai') {
            $data['pertanyaan'] = $this->Periksa_Model->getFirstQuestion();
            $this->load->view('pemeriksaan', $data);
        } else {
            $initial = substr($kode, 0, 1);
            if ($initial == 'G') {
                $data['pertanyaan'] = $this->Periksa_Model->getQuestionBykode($kode);
                $this->load->view('pemeriksaan', $data);
            } else {
                $data['solusi'] = $this->Periksa_Model->getSolutionByKode($kode);
                $this->load->view('solusi', $data);
            }
        }
    }
}
