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
        $this->tableFamily      = 'tr_employe_to_family';
        $this->tableEmergency   = 'tr_employe_to_emergency_contact';
        $this->tableEducation   = 'tr_employe_to_education';
    }

    public function getAllData($jobId = null)
    {
        $this->_join();
        if ($jobId) {
            $this->db->where('a.job_id =', $jobId);
        }
        return $this->db->get($this->tableRelation . ' a');
    }

    public function getDataJob()
    {
        return $this->db->get($this->tableJob);
    }

    public function getDataBy($data)
    {
        $this->_join();
        return $this->db->get_where($this->tableRelation . ' a', $data);
    }

    private function _join()
    {
        $this->db->select('a.*,b.name,c.fullname');
        $this->db->join($this->tableJob . ' b', 'a.job_id=b.id', 'LEFT');
        $this->db->join($this->tableEmploye . ' c', 'a.employe_id=c.id', 'LEFT');
    }

    public function getDataEmployeBy($data)
    {
        return $this->db->get_where($this->tableEmploye, $data);
    }

    public function getDataFamily($data)
    {
        return $this->db->get_where($this->tableFamily, $data);
    }

    public function getDataEmergency($data)
    {
        return $this->db->get_where($this->tableEmergency, $data);
    }

    public function getDataEducationBy($data)
    {
        $this->db->select('a.*,b.nama kabupaten');
        $this->db->join('kabupaten b', 'a.regency_id=b.id');
        return $this->db->get_where($this->tableEducation . ' a', $data);
    }

    public function getDataByDetail($table, $data)
    {
        return $this->db->get_where($table, $data);
    }
}
