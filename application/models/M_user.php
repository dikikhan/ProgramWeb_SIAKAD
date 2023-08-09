<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function getuserlogin($data)
    {
        return $this->db->get_where('user', $data, 1)->row();
    }

    public function Get($email = null)
    {
        if ($email != null) {
            $this->db->where('email', $email);
        }

        return $this->db->get('user');
    }

    function Save($data)
    {
        return $this->db->insert('user', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('email', $where);
        return $this->db->update('user', $data);
    }

    function Deleted($email)
    {
        return $this->db->delete('user', ['email' => $email]);
    }
}


/* End of file M_user_model.php and path \application\models\M_user_model.php */