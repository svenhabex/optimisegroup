<?php

class Project_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProjectTitles()
    {
        $this->db->select('proj_id, proj_titel, proj_afbeelding');
        $this->db->from('project');

        $query = $this->db->get();
        return $query->result();
    }

    public function getProjectTitlesByCat($cat)
    {
        $this->db->select('proj_id, proj_titel, proj_afbeelding');
        $this->db->from('project');
        $this->db->where('proj_cat', $cat);

        $query = $this->db->get();
        return $query->result();
    }

    public function getProjectById($id)
    {
        $this->db->select('*');
        $this->db->from('project');
        $this->db->where('proj_id', $id);

        $query = $this->db->get();
        return $query->result();
    }


}