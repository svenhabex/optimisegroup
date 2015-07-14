<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class It extends CI_Controller {


    public function index()
    {
        $title['title'] = 'Optimise Group | IT';

        $this->load->model('project_model');
        $data['projecten'] = $this->project_model->getProjectTitlesByCat(1);

        $this->load->view('templates/head', $title);
        $this->load->view('pages/it', $data);
        $this->load->view('templates/footer');
    }
}
