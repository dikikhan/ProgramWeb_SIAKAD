<!-- Model Dosen -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dosen extends CI_Model
{
    public function Get($id_dosen = null)
    {
        if ($id_dosen != null) {
            $this->db->where('id_dosen', $id_dosen);
        }

        return $this->db->get('dosen');
    }

    function Save($data)
    {
        return $this->db->insert('dosen', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_dosen', $where);
        return $this->db->update('dosen', $data);
    }
    function Deleted($id_semester)
    {
        return $this->db->delete('dosen', ['id_dosen' => $id_semester]);
    }

    function GetKodeProdi()
    {
        $this->db->select('kode_prodi, nama_prodi');
        return $this->db->get('program_studi')->result_array();
    }
    public function GetDosenWithProdi($id_dosen = null)
    {
        $this->db->select('dosen.*, program_studi.nama_prodi');
        $this->db->from('dosen');
        $this->db->join('program_studi', 'program_studi.kode_prodi = dosen.kode_prodi');

        if ($id_dosen != null) {
            $this->db->where('dosen.id_dosen', $id_dosen);
        }

        $query = $this->db->get();
        return $query;
    }
}