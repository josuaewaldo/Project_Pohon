<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller User
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class User extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('user/beranda');
		$this->load->view('layout/footer');
	}
	public function login()
	{
		$this->load->view('layout/header');
		$this->load->view('user/login');
		$this->load->view('layout/footer');
	}
	public function registrasi()
	{ $data['judul'] = "Halaman Registrasi";
    
		// Pastikan bahwa pengguna tidak sedang login sebelumnya
		if ($this->session->userdata('email')) {
			redirect('user');
		}
	
		$this->form_validation->set_rules('namaLengkap', 'Nama Lengkap', 'required', [
			'required' => 'Nama Lengkap Wajib di isi'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]', [
			'required' => 'Email Wajib di isi',
			'valid_email' => 'Email Harus Valid',
			'is_unique' => 'Email ini sudah terdaftar!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]', [
			'required' => 'Password Wajib di isi',
			'min_length' => 'Password terlalu pendek, minimal 5 karakter'
		]);
		$this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin Wajib di isi'
		]);
		$this->form_validation->set_rules('asalKota', 'Asal Kota', 'required', [
			'required' => 'Asal Kota Wajib di isi'
		]);
		$this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'required', [
			'required' => 'Tanggal Lahir Wajib di isi'
		]);
	
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("user/registrasi", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'namaLengkap' => $this->input->post('namaLengkap'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'gender' => $this->input->post('gender'),
				'asal_kota' => $this->input->post('asalKota'),
				'tanggal_lahir' => $this->input->post('tanggalLahir'),
				'gambar' => 'default.jpg',
				'role' => "User",
				'date_created' => time()
			];
			$this->user_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Registrasi berhasil! Silakan login.</div>');
			redirect('user/login');
		}
		// $this->load->view('layout/header');
		// $this->load->view('user/registrasi');
		// $this->load->view('layout/footer');
	}
	public function formDonasi()
	{
		$this->load->view('layout/header');
		$this->load->view('user/formDonasi');
		$this->load->view('layout/footer');
	}

}


/* End of file User.php */
/* Location: ./application/controllers/User.php */