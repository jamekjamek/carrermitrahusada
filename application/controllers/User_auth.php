<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_auth_model', 'Auth');
    }

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
        $this->_validation();
        if ($this->form_validation->run() === FALSE) {
            $data = [
                'hallo' => 'hallo'
            ];
            $page   = 'auth/register';
            pageFrontEnd($page, $data);
        } else {
            $dataInput  = [
                'email'             => htmlspecialchars($this->input->post('email')),
                'password'          => htmlspecialchars(password_hash($this->input->post('password'), PASSWORD_DEFAULT)),
                'fullname'          => htmlspecialchars($this->input->post('fullname')),
                // 'nickname'          => '',
                // 'place_of_birth'    => '',
                // 'date_of_birth'     => '',
                // 'gender'            => '',
                // 'religion'          => '',
                // 'status'            => '',
                // 'height'            => '',
                // 'identity_number'   => '',
                // 'address'           => '',
                // 'address_id'        => '',
                // 'residence'         => '',
                // 'residence_id'      => '',
                // 'handphone'         => '',
                // 'phone'             => '',
                // 'photo'             => '',
                // 'photo_full_body'   => '',

            ];
            $insert     = $this->Auth->insert($dataInput);
            if ($insert > 0) {
                $this->session->set_flashdata('success', 'Pendaftaran Berhasil silahkan login');
            } else {
                $this->session->set_flashdata('error', 'Server sedang sibuk, silahkan coba lagi');
            }
            redirect('auth');
        }
    }

    private function _validation()
    {
        $this->form_validation->set_rules(
            'fullname',
            'Nama lengkap',
            'trim|required',
            [
                'required' => '%s wajib diisi'
            ]
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|required|valid_email',
            [
                'required'      => '%s wajib diisi',
                'valid_email'   => 'format %s salah',
            ]
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|required',
            [
                'required'  => '%s wajib diisi',
            ]
        );

        $this->form_validation->set_rules(
            'confirmpassword',
            'Konfirmasi Password',
            'trim|required|matches[password]',
            [
                'required'  => '%s wajib diisi',
                'matches'   => '%s tidak cocok',
            ]
        );
    }
}
