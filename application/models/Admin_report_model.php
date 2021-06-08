<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_report_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->tableEmploye     = 'm_employe';
        $this->tableJob         = 'm_jobs';
        $this->tableRelation    = 'tr_employe_to_job';
    }

    public function getAllData($jobId = null)
    {
        $this->db->select('a.*,b.name,c.fullname');
        $this->db->join($this->tableJob . ' b', 'a.job_id=b.id', 'LEFT');
        $this->db->join($this->tableEmploye . ' c', 'a.employe_id=c.id', 'LEFT');
        if ($jobId) {
            $this->db->where('a.job_id =', $jobId);
        }
        return $this->db->get($this->tableRelation . ' a');
    }

    public function getDataJob()
    {
        return $this->db->get($this->tableJob);
    }
}
