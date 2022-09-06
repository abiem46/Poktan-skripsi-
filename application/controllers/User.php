<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul']= 'Beranda';
		$data['beranda'] = $this->db->get_where('beranda')->result_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav');
		$this->load->view('beranda',$data);
		$this->load->view('templates/footer');

	}
	public function profile()
	{
		$data['judul']= 'Profile';
		$data['profile'] = $this->db->get_where('profile')->result_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav');
		$this->load->view('profile',$data);
		$this->load->view('templates/footer');

	}
	public function stok_barang()
	{
		$data['judul']= 'Stok Barang';
		$data['stokalat'] = $this->db->get_where('stokalat')->result_array();
		$data['stok_barang'] = $this->db->get_where('stok_barang')->result_array();
		$data['surat_pengantar'] = $this->db->get_where('surat_pengantar')->result_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav');
		$this->load->view('stok_barang',$data);
		$this->load->view('templates/footer');

	}
	public function anggota()
	{
		$data['judul']= 'Daftar Anggota';
		$data['anggota'] = $this->db->get_where('anggota')->result_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav');
		$this->load->view('anggota',$data);
		$this->load->view('templates/footer');

	}
	public function berita()
	{
		$data['judul']= 'Daftar Berita';
		$data['berita'] = $this->db->get_where('berita')->result_array();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav');
		$this->load->view('berita',$data);
		$this->load->view('templates/footer');

	}
	public function tambah_surat()
	{
		$this->form_validation->set_rules('id_anggota', 'ID Anggota', 'trim|required');
		$this->form_validation->set_rules('jenis_surat', 'Jenis Surat', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul']= 'Surat Pengajuan';
			$data['anggota']= $this->db->get_where('anggota')->result_array();
			$data['jenis_surat']= $this->db->get_where('jenis_surat')->result_array();
			$this->load->view('templates/header',$data);
			$this->load->view('templates/nav');
			$this->load->view('tambah_surat', $data);
			$this->load->view('templates/footer');
		} else {
			$data=[
				'id_anggota'=>$this->input->post('id_anggota'),
				'jenis_surat'=>$this->input->post('jenis_surat'),
				'jumlah'=>$this->input->post('jumlah')
			];
			$this->db->insert('surat_pengantar', $data);
			$this->session->set_flashdata('success', 'Data berhasil Ditambahkan!!!');
			redirect('user/stok_barang');
		}
	}
	public function edit_surat($id)
	{
		$this->form_validation->set_rules('id_anggota', 'ID Anggota', 'trim|required');
		$this->form_validation->set_rules('jenis_surat', 'Jenis Surat', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul']= 'Surat Pengajuan';
			$data['anggota']= $this->db->get_where('anggota')->result_array();
			$data['surat_pengantar']= $this->db->get_where('surat_pengantar', ['id_anggota'=>$id])->row_array();
			$data['jenis_surat']= $this->db->get_where('jenis_surat')->result_array();
			$this->load->view('templates/header',$data);
			$this->load->view('templates/nav');
			$this->load->view('edit_surat', $data);
			$this->load->view('templates/footer');
		} else {
			$data=[
				'id_anggota'=>$this->input->post('id_anggota'),
				'jenis_surat'=>$this->input->post('jenis_surat'),
				'jumlah'=>$this->input->post('jumlah')
			];
			
			$this->db->where(['id_anggota'=>$id]);
			$this->db->update('surat_pengantar', $data);
			$this->session->set_flashdata('success', 'Data berhasil Diedit!!!');
			redirect('user/stok_barang');
		}
	}

	public function hapus_surat($id)
	{
		$this->User_model->hapus_surat($id);
		redirect('user/stok_barang');
	}
}
