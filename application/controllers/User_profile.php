<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_profile extends CI_Controller
{
    public function index()
    {
        $data = [
            'hallo' => 'hallo'
        ];
        $page   = 'profile/personal/index';
        pageProfile($page, $data);
    }

    public function family()
    {
        $data = [
            'hallo' => 'hallo'
        ];
        $page   = 'profile/personal/family';
        pageProfile($page, $data);
    }
}
