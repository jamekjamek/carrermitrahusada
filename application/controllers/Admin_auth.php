<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_auth_model', 'Authentication');
    }

    public function index()
    {
        if ($this->session->userdata('admin')) {
            redirect('admin/dashboard');
        }
        $this->form_validation->set_rules(
            'username',
            'Email',
            'trim|required|valid_email',
            [
                'required'      => '%s wajib diisi',
                'valid_email'   => 'Format %s salah'
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
        if ($this->form_validation->run() === false) {
            $this->load->view('admin/auth/index');
        } else {
            $username   = $this->input->post('username');
            $password   = $this->input->post('password');

            $cek        = $this->Authentication->getDataUserBy(['email' => $username])->row();
            if ($cek) {
                if (password_verify($password, $cek->password)) {
                    $this->session->set_userdata('admin', $cek);
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata(
                        'error',
                        '<div class="alert bg-danger alert-danger text-white" role="alert">
                            Password salah
                        </div>'
                    );
                }
            } else {

                $this->session->set_flashdata(
                    'error',
                    '<div class="alert bg-danger alert-danger text-white" role="alert">
                        User tidak terdaftar
                    </div>'
                );
            }
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('admin');
        redirect('login');
    }
}
