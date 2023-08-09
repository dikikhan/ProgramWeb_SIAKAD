<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }
        $this->load->model('M_kelas');
    }

    public function index()
    {
        $data['data'] = $this->M_kelas->GetKelasWithProdiAndDosen()->result();
        $data['pages'] = 'project/kelas/kelas';
        $this->load->view('template', $data);
    }
    public function add()
    {
        $data['prodi_list'] = $this->M_kelas->GetKodeProdi();
        $data['dosen_list'] = $this->M_kelas->GetIdDosen();
        $data['pages'] = 'project/kelas/add_kelas';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_kelas' => $post['id_kelas'],
            'nama_kelas' => $post['nama_kelas'],
            'kode_prodi' => $post['kode_prodi'],
            'id_dosen' => $post['id_dosen']
        ];
        $this->M_kelas->Save($data);
        $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        redirect(base_url('project/data_kelas/kelas'));
    }

    public function edit($id_kelas)
    {
        $data['kelas'] = $this->M_kelas->Get();
        $data['prodi_list'] = $this->M_kelas->GetKodeProdi();
        $data['dosen_list'] = $this->M_kelas->GetIdDosen();
        $data['data'] = $this->M_kelas->GetKelasWithProdiAndDosen($id_kelas)->row();
        $data['pages'] = 'project/kelas/edit_kelas';
        $this->load->view('template', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = [
            'id_kelas' => $post['id_kelas'],
            'nama_kelas' => $post['nama_kelas'],
            'kode_prodi' => $post['kode_prodi'],
            'id_dosen' => $post['id_dosen']
        ];
        $this->M_kelas->Updated($data, $post['where']);
        $this->session->set_flashdata('success', 'Data berhasil diupdate');
        redirect(base_url('project/data_kelas/kelas'));

    }

    public function delete($kode_prodi)
    {
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        $this->M_kelas->Deleted($kode_prodi);
        redirect(base_url('project/data_kelas/kelas'));
    }
}