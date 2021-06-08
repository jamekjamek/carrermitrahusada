<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_employe extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_employe_model', 'Employe');
    }

    public function index()
    {
        $data   = [
            'title'     => 'Data User',
            'subtitle'  => 'Menampilkan data-data user pendaftar',
            'employies' => $this->Employe->getAllData()->result()
        ];
        $page   = 'employe/index';
        pageBackend($page, $data);
    }
}
