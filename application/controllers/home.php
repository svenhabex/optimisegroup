<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    public function index()
    {
        $title['title'] = 'Optimise Group | HOME';

        $this->load->view('templates/head', $title);
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }
}
