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

    public function getDataEmergencyBy($data)
    {
        return $this->db->get_where($this->tableEmergency, $data);
    }

    public function insertEmergency($data)
    {
        $this->db->insert($this->tableEmergency, $data);
        return $this->db->affected_rows();
    }
}
