<!-- Model Dosen -->

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_prodi_kaprodi extends CI_Model
{
    public function Get($id_kaprodi = null)
    {
        if ($id_kaprodi != null) {
            $this->db->where('id_kaprodi', $id_kaprodi);
        }

        return $this->db->get('prodi_kaprodi');
    }

    function Save($data)
    {
        return $this->db->insert('prodi_kaprodi', $data);
    }

    function Updated($data, $where)
    {
        $this->db->where('id_kaprodi', $where);
        return $this->db->update('prodi_kaprodi', $data);
    }
    function Deleted($id_dosen)
    {
        return $this->db->delete('prodi_kaprodi', ['id_kaprodi' => $id_dosen]);
    }

    function GetKodeProdi()
    {
        $this->db->select('kode_prodi');
        return $this->db->get('program_studi')->result_array();
    }
}