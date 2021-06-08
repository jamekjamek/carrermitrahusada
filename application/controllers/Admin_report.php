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

    public function detail($id)
    {
        $decode         = $this->encrypt->decode($id);
        $detail         = $this->Report->getDataBy(['a.id' => $decode])->row();
        $personal       = $this->Report->getDataEmployeBy(['id' => $detail->employe_id])->row();
        $familiy        = $this->Report->getDataFamily(['employe_id' => $detail->employe_id])->result();
        $emergency      = $this->Report->getDataEmergency(['employe_id' => $detail->employe_id])->row();
        $education      = $this->Report->getDataEducationBy(['employe_id' => $detail->employe_id])->row();
        $organisation   = $this->Report->getDataByDetail('tr_employe_to_organisation', ['employe_id' => $detail->employe_id])->row();
        $training       = $this->Report->getDataByDetail('tr_employe_to_training', ['employe_id' => $detail->employe_id])->row();
        $language       = $this->Report->getDataByDetail('tr_employe_to_language', ['employe_id' => $detail->employe_id])->row();
        $jobhistory     = $this->Report->getDataByDetail('tr_employe_to_job_history', ['employe_id' => $detail->employe_id])->result();
        if ($detail) {
            $data   = [
                'title'         => 'Detail Data Pendaftar',
                'subtitle'      => 'Menampilkan detail data pendaftar',
                'detail'        => $detail,
                'personal'      => $personal,
                'datafamily'    => $familiy,
                'emergency'     => $emergency,
                'education'     => $education,
                'organisation'  => $organisation,
                'training'      => $training,
                'language'      => $language,
                'jobhistory'    => $jobhistory
            ];
            $page   = 'report/jobemploye/detail';
            pageBackend($page, $data);
        } else {
            echo "page not found";
        }
    }
}
