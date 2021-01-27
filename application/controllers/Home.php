<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('app/templates/header_login');
        $this->load->view('app/home/periksa');
        $this->load->view('app/templates/footer_login');
    }
}
