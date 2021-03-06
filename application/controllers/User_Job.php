<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_job extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_job_model', 'Job');
        $this->user = $this->session->userdata('employe');
    }

    public function index()
    {
        $data = [
            'jobs' => $this->Job->getAllData()->result()
        ];
        $page   = 'job/index';
        pageFrontEnd($page, $data);
    }

    public function detail($id = null)
    {
        $decode = $this->encrypt->decode($id);
        $job    = $this->Job->getDataBy(['id' => $decode])->row();
        if ($job) {
            $data = [
                'job' => $job
            ];
            $page   = 'job/detail';
            pageFrontEnd($page, $data);
        } else {
        }
    }

    public function submit($id)
    {
        $jobId  = $this->encrypt->decode($id);
        if ($this->user) {
            $cekUserJob = $this->Job->getDataEmployeToJob(['employe_id' => $this->user->id, 'job_id' => $jobId]);
            if ($cekUserJob->num_rows() > 0) {
                $this->session->set_flashdata('error', 'Anda sudah terdaftar di job ini');
            } else {
                $dataInsert = [
                    'employe_id'    => $this->user->id,
                    'job_id'        => $jobId
                ];
                $insert = $this->Job->insert($dataInsert);
                if ($insert > 0) {
                    $this->session->set_flashdata('success', 'Anda berhasil mendaftarkan di job ini');
                } else {
                    $this->session->set_flashdata('error', 'Server sedang gangguan, silahkan coba lagi');
                }
            }
        } else {
            $this->session->set_flashdata('error', 'Anda harus login terlebih dahulu');
        }

        redirect('job/detail/' . $id);
    }
}
