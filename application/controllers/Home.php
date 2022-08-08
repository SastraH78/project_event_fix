<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/main/header');
        $this->load->view('home/index');
        $this->load->view('template/main/footer');
    }
}
