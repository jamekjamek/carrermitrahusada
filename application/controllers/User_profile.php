<?php

use function PHPSTORM_META\map;

defined('BASEPATH') or exit('No direct script access allowed');
class User_profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_profile_model', 'Profile');
    }

    public function index()
    {
        $this->_validation('personal');
        if ($this->form_validation->run() === FALSE) {
            $data = [
                'employe' => $this->Profile->getDataBy(['id' => session()->id])->row()
            ];
            $page   = 'profile/personal/index';
            pageProfile($page, $data);
        } else {
            $dataUpdate = [
                'email'             => htmlspecialchars($this->input->post('email')),
                'password'          => htmlspecialchars(password_hash($this->input->post('password'), PASSWORD_DEFAULT)),
                'fullname'          => htmlspecialchars($this->input->post('fullname')),
                'gender'            => htmlspecialchars($this->input->post('gender')),
                'religion'          => htmlspecialchars($this->input->post('religion')),
                'status'            => htmlspecialchars($this->input->post('status')),
                'nickname'          => htmlspecialchars($this->input->post('nickname')),
                'place_of_birth'    => htmlspecialchars($this->input->post('placeofbirth')),
                'date_of_birth'     => htmlspecialchars($this->input->post('dateofbirth')),
                'height'            => htmlspecialchars($this->input->post('height')),
                'identity_number'   => htmlspecialchars($this->input->post('identitynumber')),
                'address'           => htmlspecialchars($this->input->post('address')),
                'residence'         => htmlspecialchars($this->input->post('residence')),
                'handphone'         => htmlspecialchars($this->input->post('handphone')),
                'phone'             => htmlspecialchars($this->input->post('phone')),
                'updated_at'        => date('Y-m-d H:i:s')
            ];
            $update = $this->Profile->update($dataUpdate, ['id' => session()->id]);
            if ($update > 0) {
                $this->session->set_flashdata('success', 'Data berhasil di update');
            } else {
                $this->session->set_flashdata('error', 'Server sedang sibuk');
            }
            redirect('profile/index');
        }
    }


    //FAMILY
    public function family()
    {
        $data = [
            'employe'   => $this->Profile->getDataBy(['id' => session()->id])->row(),
            'families'  => $this->Profile->getDataFamily(['employe_id' => session()->id])->result()
        ];
        $page   = 'profile/family/index';
        pageProfile($page, $data);
    }

    public function addfamily()
    {
        $this->_validation('family');
        if ($this->form_validation->run() === false) {
            $data = [
                'employe'   => $this->Profile->getDataBy(['id' => session()->id])->row(),
            ];
            $page   = 'profile/family/create';
            pageProfile($page, $data);
        } else {
            $dataInsert = [
                'employe_id'        => session()->id,
                'name'              => htmlspecialchars($this->input->post('name')),
                'gender'            => htmlspecialchars($this->input->post('gender')),
                'relationship'      => htmlspecialchars($this->input->post('relationship')),
                'last_education'    => htmlspecialchars($this->input->post('education')),
                'place_of_birth'    => htmlspecialchars($this->input->post('placeofbirth')),
                'date_of_birth'     => htmlspecialchars($this->input->post('dateofbirth')),
            ];
            $insert     = $this->Profile->insertFamily($dataInsert);
            if ($insert > 0) {
                $this->session->set_flashdata('success', 'Data berhasil di simpan');
            } else {
                $this->session->set_flashdata('error', 'Server sedang sibuk, silahkan coba lagi');
            }
            redirect('profile/family');
        }
    }

    public function deletefamily($id)
    {
        $decode = $this->encrypt->decode($id);
        $delete = $this->Profile->deleteFamily(['id' => $decode]);
        if ($delete > 0) {
            $this->session->set_flashdata('success', 'Data berhasil di hapus');
        } else {
            $this->session->set_flashdata('error', 'Server sedang sibuk, silahkan coba lagi');
        }
        redirect('profile/family');
    }
    //END FAMILY

    //EMERGENCY CONTACT
    public function emergency()
    {
        $this->_validation('emergency');
        if ($this->form_validation->run() === FALSE) {
            $data = [
                'emergency' => $this->Profile->getDataEmergency(['employe_id' => session()->id])->row()
            ];
            $page   = 'profile/emergency/index';
            pageProfile($page, $data);
        } else {
            $dataEmergency = [
                'employe_id'    => session()->id,
                'name'          => htmlspecialchars($this->input->post('name')),
                'relationship'  => htmlspecialchars($this->input->post('relationship')),
                'handphone'     => htmlspecialchars($this->input->post('handphone')),
                'updated_at'    => date('Y-m-d H:i:s')
            ];
            $cekData    = $this->Profile->getDataEmergencyBy(['employe_id' => session()->id]);
            if ($cekData->num_rows() > 0) {
                $update = $this->Profile->updateEmergency($dataEmergency, ['employe_id' => session()->id]);
                if ($update > 0) {
                    $this->session->set_flashdata('success', 'Data berhasil di update');
                } else {
                    $this->session->set_flashdata('error', 'Server sedang sibuk, silahkan coba lagi');
                }
            } else {
                $insert = $this->Profile->insertEmergency($dataEmergency);
                if ($insert > 0) {
                    $this->session->set_flashdata('success', 'Data berhasil di update');
                } else {
                    $this->session->set_flashdata('error', 'Server sedang sibuk, silahkan coba lagi');
                }
            }
            redirect('emergency');
        }
    }

    private function _validation($type = null)
    {
        if ($type === 'personal') {
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
                    'required'  => '%s wajib diisi',
                    'email'     => 'Format %s salah'
                ]
            );

            $this->form_validation->set_rules(
                'nickname',
                'Nama panggilan',
                'trim|required',
                [
                    'required'  => '%s wajib diisi',
                ]
            );

            $this->form_validation->set_rules(
                'placeofbirth',
                'Tempat lahir',
                'trim|required',
                [
                    'required'  => '%s wajib diisi',
                ]
            );

            $this->form_validation->set_rules(
                'dateofbirth',
                'Tanggal lahir',
                'trim|required',
                [
                    'required'  => '%s wajib diisi',
                ]
            );

            $this->form_validation->set_rules(
                'height',
                'Tinggi badan',
                'trim|required',
                [
                    'required'  => '%s wajib diisi',
                ]
            );

            $this->form_validation->set_rules(
                'identitynumber',
                'Nomor Identitas',
                'trim|required',
                [
                    'required'  => '%s wajib diisi',
                ]
            );

            $this->form_validation->set_rules(
                'address',
                'Alamat lengkap',
                'trim|required',
                [
                    'required'  => '%s wajib diisi',
                ]
            );

            $this->form_validation->set_rules(
                'residence',
                'Alamat tempat tinggal',
                'trim|required',
                [
                    'required'  => '%s wajib diisi',
                ]
            );

            $this->form_validation->set_rules(
                'handphone',
                'Nomor Handphone',
                'trim|required',
                [
                    'required'  => '%s wajib diisi',
                ]
            );
        }

        if ($type === 'family') {
            $this->form_validation->set_rules(
                'name',
                'Nama lengkap',
                'trim|required',
                [
                    'required' => '%s wajib diisi'
                ]
            );
            $this->form_validation->set_rules(
                'placeofbirth',
                'Tempat lahir',
                'trim|required',
                [
                    'required' => '%s wajib diisi'
                ]
            );
            $this->form_validation->set_rules(
                'dateofbirth',
                'Tanggal lahir',
                'trim|required',
                [
                    'required' => '%s wajib diisi'
                ]
            );
        }

        if ($type === 'emergency') {
            $this->form_validation->set_rules(
                'name',
                'Nama lengkap',
                'trim|required',
                [
                    'required' => '%s wajib diisi'
                ]
            );
            $this->form_validation->set_rules(
                'handphone',
                'Nomor Hp',
                'trim|required',
                [
                    'required' => '%s wajib diisi'
                ]
            );
        }
    }
}
