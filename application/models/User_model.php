<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_anggota($no_surat, $id_anggota, $jenis_surat)
    {
        return $this->db->query("SELECT anggota.id_anggota, anggota.password, anggota.role, anggota.active, anggota.anggota, anggota.jabatan, anggota.rt, anggota.rw, anggota.desa, anggota.dusun, anggota.luas_tanah, surat_pengantar.no_surat, surat_pengantar.id_anggota, surat_pengantar.jenis_surat, surat_pengantar.jumlah, jenis_surat.jenis_surat FROM anggota, surat_pengantar, jenis_surat
        WHERE surat_pengantar.no_surat = '$no_surat'
        AND surat_pengantar.id_anggota = '$id_anggota'
        AND surat_pengantar.jenis_surat = '$jenis_surat'")->row_array();
    }
    public function get_barang($id_anggota, $id_barang)
    {
        return $this->db->query("SELECT anggota.id_anggota, anggota.password, anggota.anggota, anggota.jabatan, anggota.rt, anggota.rw, anggota.desa, anggota.dusun, anggota.luas_tanah, stok_barang.id_barang, stok_barang.anggota, stok_barang.pupuk, stok_barang.bibit FROM 
        WHERE anggota.id_anggota = '$id_anggota'
            AND stok_barang.id_barang = '$id_barang'
            AND anggota.anggota = stok_barang.anggota")->row_array();
    }

    public function hapus_surat($id)
    {
        $this->db->delete('surat_pengantar',['id_anggota'=> $id]);
    }
}