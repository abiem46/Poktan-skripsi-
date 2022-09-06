<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
	}

	public function index()
    {
        if ($this->session->userdata('id_anggota')) {
            redirect('user');
        }

        $this->form_validation->set_rules('id_anggota', 'Id Anggota', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['judul']= 'Login Page';
            $this->load->view('login',$data);
        } else {
            // validasinya success
            $this->_login();
        }
    }
    private function _login()
    {
        $id_anggota = $this->input->post('id_anggota');
        $password = $this->input->post('password');

        $anggota = $this->db->get_where('anggota', ['id_anggota' => $id_anggota])->row_array();

        // jika anggotanya ada
        if ($anggota) {
            // jika anggotanya aktif
            if ($anggota['active'] == 1) {
                // cek password
                if (password_verify($password, $anggota['password'])) {
                    $data = [
                        'id_anggota' => $anggota['id_anggota'],
                        'role' => $anggota['role']
                    ];
                    $this->session->set_userdata($data);
                    if ($anggota['role'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata sandi anda salah!</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Anda Sedang di Block!</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Belum Terdaftar!</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id_anggota');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Sudah Logout!</div>');
        redirect('login');
    }
}
