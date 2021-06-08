<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table    = 'm_administrator';
    }

    public function getDataUserBy($data)
    {
        return $this->db->get_where($this->table, $data);
    }
}
