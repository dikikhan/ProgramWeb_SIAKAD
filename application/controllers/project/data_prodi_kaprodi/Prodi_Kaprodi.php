<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi_Kaprodi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }
        $this->load->model('M_prodi_kaprodi');
    }

    public function index()
    {
        $data['data'] = $this->M_prodi_kaprodi->Get()->result();
        $data['pages'] = 'project/prodi_kaprodi/prodi_kaprodi';
        $this->load->view('template', $data);
    }

    public function add()
    {
        $data['prodi'] = $this->M_prodi_kaprodi->getKodeProdi();
        $data['pages'] = 'project/prodi_kaprodi/add_prodi_kaprodi';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_kaprodi' => $post['id_kaprodi'],
            'kode_prodi' => $post['kode_prodi'],
            'id_dosen' => $post['id_dosen']
        ];
        $this->M_prodi_kaprodi->Save($data);
        $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        redirect(base_url('project/data_prodi_kaprodi/prodi_kaprodi'));
    }

    public function edit($id_kaprodi)
    {
        $data['prodi'] = $this->M_prodi_kaprodi->getKodeProdi();
        $data['data'] = $this->M_prodi_kaprodi->Get($id_kaprodi)->row();
        $data['pages'] = 'project/prodi_kaprodi/edit_prodi_kaprodi';
        $this->load->view('template', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = [
            'id_kaprodi' => $post['id_kaprodi'],
            'kode_prodi' => $post['kode_prodi'],
            'id_dosen' => $post['id_dosen']
        ];
        $this->M_prodi_kaprodi->Updated($data, $post['where']);
        $this->session->set_flashdata('success', 'Data berhasil diupdate');
        redirect(base_url('project/data_prodi_kaprodi/prodi_kaprodi'));

    }

    public function delete($kode_prodi)
    {
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        $this->M_prodi_kaprodi->Deleted($kode_prodi);
        redirect(base_url('project/data_prodi_kaprodi/prodi_kaprodi'));
    }
}