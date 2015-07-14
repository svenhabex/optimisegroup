<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Communications extends CI_Controller {


    public function index()
    {
        $title['title'] = 'Optimise Group | COMMUNICATIONS';

        $this->load->model('project_model');
        $data['projecten'] = $this->project_model->getProjectTitlesByCat(2);

        $this->load->view('templates/head', $title);
        $this->load->view('pages/communications', $data);
        $this->load->view('templates/footer');
    }
}
