<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotspot extends CI_Controller {


    public function index()
    {
        $title['title'] = 'Optimise Group | HOTSPOT';

        $this->load->view('templates/head', $title);
        $this->load->view('pages/hotspot');
        $this->load->view('templates/footer');
    }
}
