<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
        if ($this->session->userdata('login') != TRUE) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $data['data'] = $this->M_user->Get()->result();
        $data['pages'] = 'pages/user';
        $this->load->view('template', $data);
    }

    public function edit($email)
    {
        $data['data'] = $this->M_user->Get($email)->row();
        $data['pages'] = 'pages/user_edit';
        $this->load->view('template', $data);
    }

    function add()
    {
        $data['pages'] = 'pages/user_add';
        $this->load->view('template', $data);
    }

    public function Update()
    {
        $post = $this->input->post();
        $data = [
            'email' => $post['email'],
            'nama' => $post['nama'],
            'aktif' => $post['aktif']
        ];
        $this->M_user->Updated($data, $post['where']);
        $this->session->set_flashdata('success', 'Data berhasil Di Edit');
        redirect(base_url('admin/user'));
    }

    public function create()
    {
        $post = $this->input->post();
        $data = [
            'email' => $post['email'],
            'nama' => $post['nama'],
            'aktif' => $post['aktif'],
            'password' => md5($post['password'])
        ];
        $this->M_user->Save($data);
        $this->session->set_flashdata('success', 'Data berhasil Di tambahkan');
        redirect(base_url('admin/user'));
    }

    function delete($email)
    {

        $this->M_user->Deleted($email);
        $this->session->set_flashdata('success', 'Data berhasil Di Hapus');
        redirect(base_url('admin/user'));
    }
}

/* End of file User.php and path \application\controllers\admin\User.php */