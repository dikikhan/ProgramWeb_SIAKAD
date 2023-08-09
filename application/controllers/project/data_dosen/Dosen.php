<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }
        $this->load->model('M_dosen');
    }

    public function index()
    {
        $data['data'] = $this->M_dosen->GetDosenWithProdi()->result();
        $data['pages'] = 'project/dosen/dosen';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['prodi_list'] = $this->M_dosen->GetKodeProdi();
        $data['pages'] = 'project/dosen/add_dosen';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_dosen' => $post['id_dosen'],
            'foto' => $post['foto'],
            'nama_lengkap' => $post['nama_lengkap'],
            'gelar' => $post['gelar'],
            'nrp' => $post['nrp'],
            'nidn' => $post['nidn'],
            'email' => $post['email'],
            'gender' => $post['gender'],
            'pendidikan_terakhir' => $post['pendidikan_terakhir'],
            'kode_prodi' => $post['kode_prodi']
        ];
        $this->M_dosen->Save($data);
        $this->session->set_flashdata('success', 'Data berhasil Di tambahkan');
        redirect(base_url('project/data_dosen/dosen'));
    }

    public function edit($id_dosen)
    {
        $data['dosen'] = $this->M_dosen->Get();
        $data['prodi_list'] = $this->M_dosen->GetKodeProdi();
        $data['data'] = $this->M_dosen->GetDosenWithProdi($id_dosen)->row();
        $data['data'] = $this->M_dosen->Get($id_dosen)->row();
        $data['pages'] = 'project/dosen/edit_dosen';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'id_dosen' => $post['id_dosen'],
            'foto' => $post['foto'],
            'nama_lengkap' => $post['nama_lengkap'],
            'gelar' => $post['gelar'],
            'nrp' => $post['nrp'],
            'nidn' => $post['nidn'],
            'email' => $post['email'],
            'gender' => $post['gender'],
            'pendidikan_terakhir' => $post['pendidikan_terakhir'],
            'kode_prodi' => $post['kode_prodi']
        ];
        $this->M_dosen->Updated($data, $post['where']);
        $this->session->set_flashdata('success', 'Data berhasil Di Update');
        redirect(base_url('project/data_dosen/dosen'));

    }

    function delete($id_dosen)
    {
        $this->session->set_flashdata('success', 'Data berhasil Di Hapus');
        $this->M_dosen->Deleted($id_dosen);
        redirect(base_url('project/data_dosen/dosen'));
    }


}