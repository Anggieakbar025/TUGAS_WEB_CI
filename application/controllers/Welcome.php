<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_user');
		$this->load->library('form_validation');

		if ($this->session->userdata('status') != 'logged in') {
			redirect('Login/index');
			
		}
		
	}

	public function dashboard($nama, $gender)
	{
		$data['nama_lengkap'] = $nama;
		$data['jenis_kelamin'] = $gender;
		$data['judul'] = 'Beranda';
		$this->load->view('template/header', $data);
		$this->load->view('isi/beranda', $data);
		$this->load->view('template/footer', $data, FALSE);
		
	}

	public function index()
	{
		$this->load->view('isi/viewprogram');   
	}

	
	public function Login()
	{
		$this->load->view('login/login_view');
	}
	public function home()
	{
		$data['judul'] = 'Home';
		$this->load->view('template/header', $data);
		$this->load->view('isi/utama');
		$this->load->view('template/footer');
	}
	public function profil()
	{
		$data['judul'] = 'Home';
		$this->load->view('template/header', $data);
		$this->load->view('isi/profil');
		$this->load->view('template/footer');
		
	}
}
