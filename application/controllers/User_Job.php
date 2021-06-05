<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_job extends CI_Controller
{
    public function index()
    {
        $data = [
            'hallo' => 'hallo'
        ];
        $page   = 'job/index';
        pageFrontEnd($page, $data);
    }

    public function detail($id = null)
    {
        $data = [
            'hallo' => 'hallo'
        ];
        $page   = 'job/detail';
        pageFrontEnd($page, $data);
    }
}
