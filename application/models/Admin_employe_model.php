<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_employe_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table    = 'm_employe';
    }

    public function getAllData()
    {
        return $this->db->get($this->table);
    }
}
