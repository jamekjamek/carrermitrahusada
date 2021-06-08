<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_dashboard_model', 'Dashboard');
    }

    public function index()
    {
        $data   = [
            'title'     => 'Dashboard',
            'subtitle'  => 'Menampilkan ringkasan data-data'
        ];
        $page   = 'dashboard/index';
        pageBackend($page, $data);
    }
}
