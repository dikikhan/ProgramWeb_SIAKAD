<!-- Model Dosen -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mahasiswa extends CI_Model
{
    public function Get($id_mahasiswa = null)
    {
        if ($id_mahasiswa != null) {
            $this->db->where('id_mahasiswa', $id_mahasiswa);
        }

        return $this->db->get('mahasiswa');
    }

    function Save($data)
    {
        return $this->db->insert('mahasiswa', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_mahasiswa', $where);
        return $this->db->update('mahasiswa', $data);
    }
    function Deleted($id_semester)
    {
        return $this->db->delete('dosen', ['id_mahasiswa' => $id_semester]);
    }

    function GetKodeProdi()
    {
        $this->db->select('kode_prodi, nama_prodi');
        return $this->db->get('program_studi')->result_array();
    }
    function GetIdSemester()
    {
        $this->db->select('id_semester, semester');
        return $this->db->get('semester')->result_array();
    }
    function GetIdKelas()
    {
        $this->db->select('id_kelas, nama_kelas');
        return $this->db->get('kelas')->result_array();
    }
    public function GetMahasiswaWithProdiAndSemesterAndKelas($id_mahasiswa = null)
    {
        $this->db->select('mahasiswa.*, program_studi.nama_prodi, semester.semester, kelas.nama_kelas');
        $this->db->from('mahasiswa');
        $this->db->join('program_studi', 'program_studi.kode_prodi = mahasiswa.kode_prodi');
        $this->db->join('semester', 'semester.id_semester = mahasiswa.id_semester');
        $this->db->join('kelas', 'kelas.id_kelas = mahasiswa.id_kelas');

        if ($id_mahasiswa != null) {
            $this->db->where('mahasiswa.id_mahasiswa', $id_mahasiswa);
        }

        $query = $this->db->get();
        return $query;
    }
}