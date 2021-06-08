<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_job extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_job_model', 'Job');
    }

    public function index()
    {

        $data   = [
            'title'     => 'Data Job',
            'subtitle'  => 'Menampilkan data-data job',
            'jobs'      => $this->Job->getAllData()->result()
        ];
        $page   = 'job/index';
        pageBackend($page, $data);
    }

    public function create()
    {
        $this->_validation();
        if ($this->form_validation->run() === FALSE) {
            $data   = [
                'title'     => 'Tambah Data Job',
                'subtitle'  => 'Menambahkan data job',
            ];
            $page   = 'job/create';
            pageBackend($page, $data);
        } else {
            $config['allowed_types']    = 'jpg|jpeg|png';
            $config['max_size']         = '2048';
            $config['max_width']        = 720;
            $config['max_height']       = 480;
            $config['upload_path']      = './assets/images/';
            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $filename   = $image['file_name'];
                $dataInsert = [
                    'name'          => htmlspecialchars($this->input->post('jobname')),
                    'image'         => $filename,
                    'open_time'     => htmlspecialchars($this->input->post('opentime')),
                    'close_time'    => htmlspecialchars($this->input->post('closetime')),
                    'qualification' => $this->input->post('qualification')
                ];
                $insert     = $this->Job->insert($dataInsert);
                if ($insert > 0) {
                    $this->session->set_flashdata('success', 'Data berhasil di simpan');
                } else {
                    $this->session->set_flashdata('error', 'Server sedang sibuk, silahkan coba lagi');
                }
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
            }
            redirect('admin/job');
        }
    }

    private function _validation()
    {
        $this->form_validation->set_rules(
            'jobname',
            'Nama Job',
            'trim|required',
            [
                'required' => '%s wajib di isi'
            ]
        );
        $this->form_validation->set_rules(
            'opentime',
            'Pembukaan',
            'trim|required',
            [
                'required' => '%s wajib di isi'
            ]
        );
        $this->form_validation->set_rules(
            'closetime',
            'Penutupan',
            'trim|required',
            [
                'required' => '%s wajib di isi'
            ]
        );
        $this->form_validation->set_rules(
            'qualification',
            'Kualifikasi',
            'trim|required',
            [
                'required' => '%s wajib di isi'
            ]
        );
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_rules(
                'closetime',
                'Penutupan',
                'trim|required',
                [
                    'required' => '%s wajib di isi'
                ]
            );
        }
    }
}
