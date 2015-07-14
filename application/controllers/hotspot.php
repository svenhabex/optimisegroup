<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotspot extends CI_Controller {


    public function index()
    {
        $title['title'] = 'Optimise Group | HOTSPOT';

        $this->load->model('project_model');
        $data['projecten'] = $this->project_model->getProjectTitlesByCat(3);

        $this->load->view('templates/head', $title);
        $this->load->view('pages/hotspot', $data);
        $this->load->view('templates/footer');
    }
}
