<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_profile_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table            = 'm_employe';
        $this->tableFamily      = 'tr_employe_to_family';
        $this->tableEmergency   = 'tr_employe_to_emergency_contact';
        $this->tableEducation   = 'tr_employe_to_education';
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }

    public function getDataBy($data)
    {
        return $this->db->get_where($this->table, $data);
    }

    public function update($data, $where)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }


    //FAMILY
    public function getDataFamily($data)
    {
        return $this->db->get_where($this->tableFamily, $data);
    }

    public function insertFamily($data)
    {
        $this->db->insert($this->tableFamily, $data);
        return $this->db->affected_rows();
    }

    public function deletefamily($data)
    {
        $this->db->delete($this->tableFamily, $data);
        return $this->db->affected_rows();
    }

    public function getDataEmergency($data)
    {
        return $this->db->get_where($this->tableEmergency, $data);
    }

    public function updateEmergency($data, $where)
    {
        $this->db->update($this->tableEmergency, $data, $where);
        return $this->db->affected_rows();
    }


    public function insertEmergency($data)
    {
        $this->db->insert($this->tableEmergency, $data);
        return $this->db->affected_rows();
    }

    public function getDataEducationBy($data)
    {
        $this->db->select('a.*,b.id as kabupaten_id, b.nama as kabupaten');
        $this->db->join('kabupaten as b', 'a.regency_id=b.id');
        return $this->db->get_where($this->tableEducation . ' a', $data);
    }

    public function getRegency($input)
    {
        $this->db->like('nama', $input);
        $this->db->limit(10);
        return $this->db->get('kabupaten');
    }

    public function updateEducation($data, $where)
    {
        $this->db->update($this->tableEducation, $data, $where);
        return $this->db->affected_rows();
    }

    public function insertEducation($data)
    {
        $this->db->insert($this->tableEducation, $data);
        return $this->db->affected_rows();
    }
}
