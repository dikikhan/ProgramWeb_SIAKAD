<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kelas extends CI_Model
{
    public function Get($id_kelas = null)
    {
        if ($id_kelas != null) {
            $this->db->where('id_kelas', $id_kelas);
        }

        return $this->db->get('kelas');
    }

    function Save($data)
    {
        return $this->db->insert('kelas', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_kelas', $where);
        return $this->db->update('kelas', $data);
    }
    function Deleted($id_kelas)
    {
        return $this->db->delete('kelas', ['id_kelas' => $id_kelas]);
    }
    function GetKodeProdi()
    {
        $this->db->select('kode_prodi, nama_prodi');
        return $this->db->get('program_studi')->result_array();
    }
    function GetIdDosen()
    {
        $this->db->select('id_dosen, nama_lengkap');
        return $this->db->get('dosen')->result_array();
    }
    public function GetKelasWithProdiAndDosen($id_kelas = null)
    {
        $this->db->select('kelas.*, program_studi.nama_prodi, dosen.nama_lengkap');
        $this->db->from('kelas');
        $this->db->join('program_studi', 'program_studi.kode_prodi = kelas.kode_prodi');
        $this->db->join('dosen', 'dosen.id_dosen = kelas.id_dosen');

        if ($id_kelas != null) {
            $this->db->where('kelas.id_kelas', $id_kelas);
        }

        $query = $this->db->get();
        return $query;
    }
}