<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {


    public function getProject()
    {
        $id = $this->input->post('project', TRUE);

        $this->load->model('project_model');

        $project = $this->project_model->getProjectById($id);

        echo json_encode($project, JSON_NUMERIC_CHECK);
    }
}
