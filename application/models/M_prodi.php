<!-- Model Prodi -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_prodi extends CI_Model
{
    public function getProdi($kode_prodi = null)
    {
        if ($kode_prodi != null) {
            $this->db->where('kode_prodi', $kode_prodi);
        }

        return $this->db->get('program_studi');
    }

    function Save($data)
    {
        return $this->db->insert('program_studi', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('kode_prodi', $where);
        return $this->db->update('program_studi', $data);
    }
    function Deleted($kode_dikti)
    {
        return $this->db->delete('program_studi', ['kode_prodi' => $kode_dikti]);
    }

    function GetKodeProdi()
    {
        $this->db->select('nama_prodi');
        return $this->db->get('program_studi')->result_array();
    }
}