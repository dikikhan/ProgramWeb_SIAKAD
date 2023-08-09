<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Semester extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }
        $this->load->model('M_semester');
    }

    public function index()
    {
        $data['data'] = $this->M_semester->Get()->result();
        $data['pages'] = 'project/semester/semester';
        $this->load->view('template', $data);
    }

    public function add()
    {
        $data['pages'] = 'project/semester/add_semester';
        $this->load->view('template', $data);
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'id_semester' => $post['id_semester'],
            'semester' => $post['semester'],
            'keterangan' => $post['keterangan']
        ];
        $this->M_semester->Save($data);
        $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        redirect(base_url('project/data_semester/semester'));
    }

    public function edit($id_semester)
    {
        $data['data'] = $this->M_semester->Get($id_semester)->row();
        $data['pages'] = 'project/semester/edit_semester';
        $this->load->view('template', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = [
            'id_semester' => $post['id_semester'],
            'semester' => $post['semester'],
            'keterangan' => $post['keterangan']
        ];
        $this->M_semester->Updated($data, $post['where']);
        $this->session->set_flashdata('success', 'Data berhasil diupdate');
        redirect(base_url('project/data_semester/semester'));

    }

    public function delete($id_semester)
    {
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        $this->M_semester->Deleted($id_semester);
        redirect(base_url('project/data_semester/semester'));
    }
}