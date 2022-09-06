<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin_model');
	}

	public function index()
	{
		$data['judul'] = 'Beranda';
		$data['beranda'] = $this->db->get_where('beranda')->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/nav');
		$this->load->view('admin/beranda', $data);
		$this->load->view('templates/footer');
	}
	public function profile()
	{
		$data['judul'] = 'Profile';
		$data['profile'] = $this->db->get_where('profile')->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/nav');
		$this->load->view('admin/profile', $data);
		$this->load->view('templates/footer');
	}
	public function stok_barang()
	{
		$data['judul'] = 'Stok Barang';
		$data['stok_barang'] = $this->db->get_where('stok_barang')->result_array();
		$data['stokalat'] = $this->db->get_where('stokalat')->result_array();
		$data['surat_pengantar'] = $this->db->get_where('surat_pengantar')->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/nav');
		$this->load->view('admin/stok_barang', $data);
		$this->load->view('templates/footer');
	}
	public function anggota()
	{
		$data['judul'] = 'Daftar Anggota';
		$data['anggota'] = $this->db->get_where('anggota')->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/nav');
		$this->load->view('admin/anggota', $data);
		$this->load->view('templates/footer');
	}
	public function berita()
	{
		$data['judul'] = 'Daftar Berita';
		$data['berita'] = $this->db->get_where('berita')->result_array();
		$this->load->view('templates/header', $data);
		$this->load->view('admin/nav');
		$this->load->view('admin/berita', $data);
		$this->load->view('templates/footer');
	}

	// kelolah_alat

	public function tambah_alat()
	{
		$this->form_validation->set_rules('nama', 'Nama Barang', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('anggota', 'Anggota', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Tambah Alat';
			$data['anggota'] = $this->db->get_where('anggota')->result_array();
			$this->load->view('templates/header', $data);
			$this->load->view('admin/nav');
			$this->load->view('admin/form_tambah_alat', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'status' => $this->input->post('status'),
				'anggota' => $this->input->post('anggota')

			];
			$this->db->insert('stokalat', $data);
			$this->session->set_flashdata('success', 'Data berhasil Ditambahkan!!!');
			redirect('admin/stok_barang');
		}
	}
	public function edit_alat($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Barang', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('anggota', 'Anggota', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Edit Alat';
			$data['stokalat'] = $this->db->get_where('stokalat', ['id' => $id])->row_array();
			$data['anggota'] = $this->db->get_where('anggota')->result_array();
			$this->load->view('templates/header', $data);
			$this->load->view('admin/nav');
			$this->load->view('admin/form_edit_alat', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'status' => $this->input->post('status'),
				'anggota' => $this->input->post('anggota')
			];
			
			$this->db->where(['id'=>$id]);
			$this->db->update('stokalat', $data);
			$this->session->set_flashdata('success', 'Data berhasil Diedit!!!');
			redirect('admin/stok_barang');
		}
	}

	public function hapus_alat($id)
	{
		$this->Admin_model->hapus_alat($id);
		redirect('admin/stokalat');
	}

	// kelolah_barang

	public function tambah_barang()
	{
		$this->form_validation->set_rules('anggota', 'Anggota', 'trim|required');
		$this->form_validation->set_rules('pupuk', 'Pupuk', 'trim|required');
		$this->form_validation->set_rules('bibit', 'Bibit', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Edit Barang';
			$data['anggota'] = $this->db->get_where('anggota')->result_array();
			$this->load->view('templates/header', $data);
			$this->load->view('admin/nav');
			$this->load->view('admin/form_tambah_barang', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'anggota' => $this->input->post('anggota'),
				'pupuk' => $this->input->post('pupuk'),
				'bibit' => $this->input->post('bibit')

			];
			$this->db->insert('stok_barang', $data);
			$this->session->set_flashdata('success', 'Data berhasil Ditambahkan!!!');
			redirect('admin/stok_barang');
		}
	}
	public function edit_barang($id)
	{
		$this->form_validation->set_rules('anggota', 'Anggota', 'trim|required');
		$this->form_validation->set_rules('pupuk', 'Pupuk', 'trim|required');
		$this->form_validation->set_rules('bibit', 'Bibit', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Edit Barang';
			$data['anggota'] = $this->db->get_where('anggota')->result_array();
			$data['stok_barang'] = $this->db->get_where('stok_barang', ['id' => $id])->row_array();
			$this->load->view('templates/header', $data);
			$this->load->view('admin/nav');
			$this->load->view('admin/form_edit_barang');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'anggota' => $this->input->post('anggota'),
				'pupuk' => $this->input->post('pupuk'),
				'bibit' => $this->input->post('bibit')
			];
			$this->db->where(['id' => $id]);
			$this->db->update('stok_barang', $data);
			$this->session->set_flashdata('success', 'Data berhasil edit!!!');
			redirect('admin/stok_barang');
		}
	}
	public function hapus_barang($id)
	{
		$this->Admin_model->hapus_barang($id);
		redirect('admin/stok_barang');
	}

	// kelolah_berita kurang [photo]

	public function tambah_berita()
	{
		$this->form_validation->set_rules('judul', 'Judul Berita', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		$this->form_validation->set_rules('date', 'Date', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Tambah Berita';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/nav');
			$this->load->view('admin/form_tambah_berita');
			$this->load->view('templates/footer');
		} else {
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_width']            = 6000;
			$config['max_height']           = 6000;
			$config['max_size']             = 10024;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('photo')) {
				var_dump($this->upload->display_errors());
				die();
			} else {
				// var_dump("berhasil");
			}
			$data = [
				'judul' => $this->input->post('judul'),
				'deskripsi' => $this->input->post('deskripsi'),
				'date' => $this->input->post('date'),
				'photo' => $_FILES["photo"]["name"]
			];
			$this->db->insert('berita', $data);
			$this->session->set_flashdata('success', 'Data berhasil Ditambahkan!!!');
			redirect('admin/berita');
		}
	}
	public function edit_berita($id)
	{
		$this->form_validation->set_rules('judul', 'Judul Berita', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		$this->form_validation->set_rules('date', 'Date', 'trim|required');
		$where = ['id' => $id];
		if ($this->form_validation->run() == FALSE) {
			$data['berita'] = $this->db->get_where('berita', $where)->row_array();
			$data['judul'] = 'Edit Berita';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/nav');
			$this->load->view('admin/form_edit_berita', $data);
			$this->load->view('templates/footer');
		} else {
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_width']            = 6000;
			$config['max_height']           = 6000;
			$config['max_size']             = 10024;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('photo')) {
				var_dump($this->upload->display_errors());
				die();
			} else {
				// var_dump("berhasil");
			}
			$data = [
				'judul' => $this->input->post('judul'),
				'deskripsi' => $this->input->post('deskripsi'),
				'date' => $this->input->post('date'),
				'photo' => $_FILES["photo"]["name"]
			];
			$this->db->where(['id' => $id]);
			$this->db->update('berita',$data);
			$this->session->set_flashdata('success', 'Data berhasil Diupdate!!!');
			redirect('admin/berita');
		}
	}
	public function hapus_berita($id)
	{
		$this->Admin_model->hapus_berita($id);
		redirect('admin/berita');
	}

	// kelolah_profile 

	public function edit_profile()
	{
		$this->form_validation->set_rules('deskripsi_org', 'Deskripsi Organisasi', 'trim|required');
		$this->form_validation->set_rules('visi', 'Visi', 'trim|required');
		$this->form_validation->set_rules('misi', 'Misi', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Edit Profile';
			$data['profile'] = $this->db->get_where('profile')->result_array();
			$this->load->view('templates/header', $data);
			$this->load->view('admin/nav');
			$this->load->view('admin/form_edit_profile', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'deskripsi_org' => $this->input->post('deskripsi_org'),
				'visi' => $this->input->post('visi'),
				'misi' => $this->input->post('misi')

			];
			$this->db->update('profile', $data);
			$this->session->set_flashdata('success', 'Data berhasil Ditambahkan!!!');
			redirect('admin/profile');
		}
	}

	// kelolah_anggota

	public function tambah_anggota()
	{
		$this->form_validation->set_rules('id_anggota', 'Id Anggota', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('anggota', 'Anggota', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('rt', 'RT', 'trim|required');
		$this->form_validation->set_rules('rw', 'RW', 'trim|required');
		$this->form_validation->set_rules('desa', 'Desa', 'trim|required');
		$this->form_validation->set_rules('dusun', 'Dusun', 'trim|required');
		$this->form_validation->set_rules('luas_tanah', 'Luas Tanah', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Tambah Anggota';
			$this->load->view('templates/header', $data);
			$this->load->view('admin/nav');
			$this->load->view('admin/form_tambah_anggota', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'id_anggota' => $this->input->post('id_anggota'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role' => $this->input->post('jabatan') == 'Anggota' ? 2 : 1,
				'active' => 1,
				'anggota' => $this->input->post('anggota'),
				'jabatan' => $this->input->post('jabatan'),
				'rt' => $this->input->post('rt'),
				'rw' => $this->input->post('rw'),
				'desa' => $this->input->post('desa'),
				'dusun' => $this->input->post('dusun'),
				'luas_tanah' => $this->input->post('luas_tanah')

			];
			$this->db->insert('anggota', $data);
			$this->session->set_flashdata('success', 'Data berhasil Ditambahkan!!!');
			redirect('admin/anggota');
		}
	}
	public function edit_anggota($id)
	{

		$this->form_validation->set_rules('anggota', 'Anggota', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('rt', 'RT', 'trim|required');
		$this->form_validation->set_rules('rw', 'RW', 'trim|required');
		$this->form_validation->set_rules('desa', 'Desa', 'trim|required');
		$this->form_validation->set_rules('dusun', 'Dusun', 'trim|required');
		$this->form_validation->set_rules('luas_tanah', 'Luas Tanah', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Edit Anggota';
			$data['anggota'] = $this->db->get_where('anggota', ['id_anggota' => $id])->row_array();
			$this->load->view('templates/header', $data);
			$this->load->view('admin/nav');
			$this->load->view('admin/form_edit_anggota', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'anggota' => $this->input->post('anggota'),
				'jabatan' => $this->input->post('jabatan'),
				'rt' => $this->input->post('rt'),
				'rw' => $this->input->post('rw'),
				'desa' => $this->input->post('desa'),
				'dusun' => $this->input->post('dusun'),
				'luas_tanah' => $this->input->post('luas_tanah')
			];
			$this->db->where(['id_anggota' => $id]);
			$this->db->update('anggota', $data);
			$this->session->set_flashdata('success', 'Data berhasil Diedit!!!');
			redirect('admin/anggota');
		}
	}

	public function hapus_anggota($id)
	{
		$this->Admin_model->hapus_anggota($id);
		redirect('admin/anggota');
	}

	// kelolah_beranda

	public function edit_beranda()
	{
		$this->form_validation->set_rules('pertanyaan1', 'Id Anggota', 'trim|required');
		$this->form_validation->set_rules('pertanyaan2', 'pertanyaan2', 'trim|required');
		$this->form_validation->set_rules('pertanyaan3', 'pertanyaan3', 'trim|required');
		$this->form_validation->set_rules('jawaban1', 'jawaban1', 'trim|required');
		$this->form_validation->set_rules('jawaban2', 'jawaban2', 'trim|required');
		$this->form_validation->set_rules('jawaban3', 'jawaban3', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Edit Beranda';
			$data['beranda'] = $this->db->get_where('beranda')->row_array();
			$this->load->view('templates/header', $data);
			$this->load->view('admin/nav');
			$this->load->view('admin/form_edit_beranda');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'pertanyaan1' => $this->input->post('pertanyaan1'),
				'pertanyaan2' => $this->input->post('pertanyaan2'),
				'pertanyaan3' => $this->input->post('pertanyaan3'),
				'jawaban1' => $this->input->post('jawaban1'),
				'jawaban2' => $this->input->post('jawaban2'),
				'jawaban3' => $this->input->post('jawaban3')

			];
			$this->db->update('beranda', $data);
			$this->session->set_flashdata('success', 'Data berhasil Diedit!!!');
			redirect('admin/index');
		}
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
			$this->load->view('admin/tambah_surat', $data);
			$this->load->view('templates/footer');
		} else {
			$data=[
				'id_anggota'=>$this->input->post('id_anggota'),
				'jenis_surat'=>$this->input->post('jenis_surat'),
				'jumlah'=>$this->input->post('jumlah')
			];
			$this->db->insert('surat_pengantar', $data);
			$this->session->set_flashdata('success', 'Data berhasil Ditambahkan!!!');
			redirect('admin/stok_barang');
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
			$this->load->view('admin/edit_surat', $data);
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
			redirect('admin/stok_barang');
		}
	}

	public function hapus_surat($id)
	{
		$this->Admin_model->hapus_surat($id);
		redirect('admin/stok_barang');
	}
}
