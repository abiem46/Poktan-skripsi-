<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function hapus_berita($id)
    {
        $this->db->delete('berita',['id'=> $id]);
    }
    public function hapus_anggota($id)
    {
        $this->db->delete('anggota',['id_anggota'=> $id]);
    }
    public function hapus_barang($id)
    {
        $this->db->delete('stok_barang',['id'=> $id]);
    }
    public function hapus_alat($id)
    {
        $this->db->delete('stokalat',['id'=> $id]);
    }
    public function get_berita($id)
    {
        return $this->db->get_where('berita', ['id' => $id])->row_array();
    }
    public function hapus_surat($id)
    {
        $this->db->delete('surat_pengantar',['id_anggota'=> $id]);
    }
}