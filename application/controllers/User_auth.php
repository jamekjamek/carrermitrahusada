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

        if (session()) {
            redirect('profile/index');
        }
        $this->_validation('login');
        if ($this->form_validation->run() === FALSE) {
            $page   = 'auth/index';
            pageFrontEnd($page);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email          = htmlspecialchars($this->input->post('email'));
        $cekEmail       = $this->Auth->getDataBy(['email' => $email])->row();

        if ($cekEmail) {
            if (password_verify($this->input->post('password'), $cekEmail->password)) {
                $this->session->set_userdata('employe', $cekEmail);
                redirect('profile/index');
            } else {
                $this->session->set_flashdata('error', 'Password salah');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('error', 'Email salah');
            redirect('auth');
        }
    }

    public function register()
    {
        if (session()) {
            redirect('profle/index');
        }
        $this->_validation();
        if ($this->form_validation->run() === FALSE) {
            $page   = 'auth/register';
            pageFrontEnd($page);
        } else {
            $dataInput  = [
                'email'             => htmlspecialchars($this->input->post('email')),
                'password'          => htmlspecialchars(password_hash($this->input->post('password'), PASSWORD_DEFAULT)),
                'fullname'          => htmlspecialchars($this->input->post('fullname')),
                'gender'            => 'L',
                'religion'          => 'Islam',
                'status'            => 'kawin',

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

    private function _validation($type = null)
    {
        if ($type == 'login') {
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
        } else {
            $this->form_validation->set_rules(
                'email',
                'Email',
                'trim|required|valid_email|is_unique[m_employe.email]',
                [
                    'required'      => '%s wajib diisi',
                    'valid_email'   => 'format %s salah',
                    'is_unique'     => '%s sudah terdaftar'
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
                'fullname',
                'Nama lengkap',
                'trim|required',
                [
                    'required' => '%s wajib diisi'
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

    public function logout()
    {
        $this->session->unset_userdata('employe');
        redirect('job');
    }
}
