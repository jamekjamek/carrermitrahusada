<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table   = 'm_employe';
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        $dataEtc    =   [
            'employe_id'           => $this->db->insert_id(),
            'question_two'      => '0',
            'question_three'    => '0',
            'question_four'     => '0',
            'question_five'     => '0',
            'question_six'      => '0',
            'question_nine'     => '0',
        ];
        $this->db->insert('tr_employe_to_question', $dataEtc);
        return $this->db->affected_rows();
    }

    public function getDataBy($data)
    {
        return $this->db->get_where($this->table, $data);
    }
}
