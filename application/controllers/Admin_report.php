<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_report_model', 'Report');
    }

    public function index()
    {
        $jobId  = $this->input->get('jobid');
        $decode = $this->encrypt->decode($jobId);
        if ($decode) {
            $allData    = $this->Report->getAllData($decode);
        } else {
            $allData    = $this->Report->getAllData();
        }

        $data   = [
            'title'     => 'Laporan',
            'subtitle'  => 'Menampilkan data-data laporan',
            'allData'   => $allData->result(),
            'jobs'      => $this->Report->getDataJob()->result()
        ];
        $page   = 'report/jobemploye/index';
        pageBackend($page, $data);
    }

    public function reportpdf()
    {
        $jobId  = $this->input->get('jobid');
        $decode = $this->encrypt->decode($jobId);
        if ($decode) {
            $allData    = $this->Report->getAllData($decode);
        } else {
            $allData    = $this->Report->getAllData();
        }
        $mpdf   = new \Mpdf\Mpdf();
        $data   =   $this->load->view('admin/report/print/jobemploye', ['allData' => $allData->result()], TRUE);
        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }
}
