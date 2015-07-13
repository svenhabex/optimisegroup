<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Communications extends CI_Controller {


    public function index()
    {
        $title['title'] = 'Optimise Group | COMMUNICATIONS';

        $this->load->view('templates/head', $title);
        $this->load->view('pages/communications');
        $this->load->view('templates/footer');
    }
}
