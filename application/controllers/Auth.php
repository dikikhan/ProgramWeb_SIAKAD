<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user','user');
    }

    public function index()
    {
            if($this->session->userdata('login') == TRUE && $this->session->userdata('username') != "" ){
                redirect(base_url().'dashboard');
            } else {
        $this->load->view('login');
    }}

    public function checklogin()
    {
        $postData = $this->input->post();

        $data = [
            'email'=>$postData['email'],
            'password'=>md5($postData['password'])
        ];
        //check acount sesuai dengan inputan form
        $checkUser = $this->user->getuserlogin($data);
        if($checkUser){
            //jika berhasil login akan di alihkan ke halaman dashboard
            $sessi = [
                'username'=>$checkUser->nama,
                'email'=>$checkUser->email,
                'login'=>TRUE
        ];
            $this->session->set_userdata($sessi);
            redirect(base_url().'dashboard');
        }else{
            //jika gagal login akan dialihkan kembali ke form login
            $this->session->set_flashdata('error','Username Dan Password Salah');
            redirect(base_url());
        }
        echo json_encode($logs);
    }

    public function logout()
    {
        $sessi = [
            'username'=>"",
            'email'=>"",
            'login'=>FALSE
        ];
        $this->session->unset_userdata($sessi);
        $this->session->sess_destroy($sessi);
        redirect(base_url());
    }
}

/* End of file Auth.php and path \application\controllers\Auth.php */
