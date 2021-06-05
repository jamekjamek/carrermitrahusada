<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_auth extends CI_Controller
{
    public function index()
    {
        $data = [
            'hallo' => 'hallo'
        ];
        $page   = 'auth/index';
        pageFrontEnd($page, $data);
    }

    public function register()
    {
        $data = [
            'hallo' => 'hallo'
        ];
        $page   = 'auth/register';
        pageFrontEnd($page, $data);
    }
}
