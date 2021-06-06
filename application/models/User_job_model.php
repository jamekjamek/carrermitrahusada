<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_job_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table   = 'm_jobs';
        $this->tableJobEmploye  = 'tr_employe_to_job';
    }

    public function getAllData()
    {
        return $this->db->get($this->table);
    }

    public function getDataBy($data)
    {
        return $this->db->get_where($this->table, $data);
    }

    public function insert($data)
    {
        $this->db->insert($this->tableJobEmploye, $data);
        return $this->db->affected_rows();
    }
}
