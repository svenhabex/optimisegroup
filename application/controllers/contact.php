<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


    public function index()
    {
        $title['title'] = 'Optimise Group | CONTACT';

        $this->load->view('templates/head', $title);
        $this->load->view('pages/contact');
        $this->load->view('templates/footer');
    }
}
