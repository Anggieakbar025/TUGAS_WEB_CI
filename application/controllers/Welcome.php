<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function dashboard($nama, $gender)
	{
		$data['judul'] = 'Beranda';
		$data['nama_lengkap'] = $nama;
		$data['jenis_kelamin'] = $gender;

		$this->load->view('template/header', $data);
		$this->load->view('beranda', $data);
		$this->load->view('template/footer');
	}

	public function profil()
	{
		$data['judul'] = 'Profil';
		$this->load->view('template/header', $data);
		$this->load->view('profil');
		$this->load->view('template/footer');
		
	}
	
	public function utama()
	{
		$data['judul'] = 'Utama';
		$this->load->view('template/header', $data);
		$this->load->view('utama');
		$this->load->view('template/footer');
	}
	
	public function event()
	{
		$data['judul'] = 'Event';
		$this->load->view('template/header', $data);
		$this->load->view('event');
		$this->load->view('template/footer');
	}
	
	public function contact()
	{
		$data['judul'] = 'Contact';
		$this->load->view('template/header', $data);
		$this->load->view('gallery');
		$this->load->view('template/footer');
	}
	
	public function gallery()
	{
		$data['judul'] = 'Gallery';
		$this->load->view('template/header', $data);
		$this->load->view('gallery');
		$this->load->view('template/footer');
		
	}
}
