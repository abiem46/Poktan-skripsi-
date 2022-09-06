<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdf extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('User_model');
    }

    public function dokumen($nomor_surat, $id_anggota, $jenis_surat)
    {
        $data['anggota'] = $this->User_model->get_anggota($nomor_surat, $id_anggota, str_replace('%20', ' ', $jenis_surat));
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('surat/surat', $data, true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}
