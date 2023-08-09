<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }
        $this->load->model('M_prodi');
    }

    public function index()
    {
        $data['data'] = $this->M_prodi->getProdi()->result();
        $data['pages'] = 'project/prodi/prodi';
        $this->load->view('template', $data);
    }

    public function add()
    {
        $data['prodi'] = $this->M_prodi->getKodeProdi();
        $data['pages'] = 'project/prodi/add_prodi';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'kode_prodi' => $post['kode_prodi'],
            'kode_dikti' => $post['kode_dikti'],
            'nama_prodi' => $post['nama_prodi'],
            'jenjang' => $post['jenjang'],
            'akreditasi' => $post['akreditasi'],
            'singkatan' => $post['singkatan']
        ];
        $this->M_prodi->Save($data);
        $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        redirect(base_url('project/data_prodi/prodi'));
    }

    public function edit($kode_prodi)
    {
        $data['prodi'] = $this->M_prodi->getKodeProdi();
        $data['data'] = $this->M_prodi->getProdi($kode_prodi)->row();
        $data['pages'] = 'project/prodi/edit_prodi';
        $this->load->view('template', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = [
            'kode_prodi' => $post['kode_prodi'],
            'kode_dikti' => $post['kode_dikti'],
            'nama_prodi' => $post['nama_prodi'],
            'jenjang' => $post['jenjang'],
            'akreditasi' => $post['akreditasi'],
            'singkatan' => $post['singkatan']
        ];
        $this->M_prodi->Updated($data, $post['where']);
        $this->session->set_flashdata('success', 'Data berhasil diupdate');
        redirect(base_url('project/data_prodi/prodi'));

    }

    public function delete($kode_prodi)
    {
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        $this->M_prodi->Deleted($kode_prodi);
        redirect(base_url('project/data_prodi/prodi'));
    }
}