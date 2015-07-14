<?php

class Project_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProjectTitles()
    {
        $this->db->select('proj_titel');
        $this->db->from('project');

        $query = $this->db->get();
        return $query->result();
    }

    public function getProjectTitlesByCat($cat)
    {
        $this->db->select('proj_titel');
        $this->db->from('project');
        $this->db->where('proj_cat', $cat);

        $query = $this->db->get();
        return $query->result();
    }

    public function getAllProjects()
    {
        $this->db->select('*');
        $this->db->from('project');

        $query = $this->db->get();
        return $query->result();
    }

    public function getProjectsByCat($cat)
    {
        $this->db->select('*');
        $this->db->from('project');
        $this->db->where('proj_cat', $cat);

        $query = $this->db->get();
        return $query->result();
    }


}