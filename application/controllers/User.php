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
		$this->load->model('User_model', 'userrole');
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			redirect('General');
		}
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'valid_email' => 'Email Belum Valid',
			'required' => 'Email Wajib Diisi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => 'Password Wajib Diisi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header");
			$this->load->view("user/login");
			$this->load->view("layout/footer");
		} else {
			$this->cek_login();
		}
	}

	public function cek_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'email' => $user['email'],
					'role' => $user['role'],
					'id_user' => $user['id_user'],
				];
				$this->session->set_userdata($data);
				if ($user['role'] == 'Admin') {
					redirect('#');
				} else {
					redirect('General');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Maaf Password Anda Salah!</div>');
				redirect('Auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Maaf Email Anda tidak terdaftar!</div>');
			redirect('Auth');
		}
	}
	public function registrasi()
	{
		if ($this->session->userdata('email')) {
			redirect('General');
		}
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim', [
			'required' => 'Mohon isi Nama Lengkap'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'Maaf, Email ini sudah terdaftar',
			'valid_email' => 'Email Harus Valid',
			'required' => 'Email Wajib Di isi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]', [
			'min_length' => 'Password Terlalu Pendek, Minimal 5 Karakter',
			'required' => 'Password Harus Diisi'
		]);
		$this->form_validation->set_rules('gender', 'Gender', 'required|trim', [
			'required' => 'Mohon Lengkapi Gender Anda'
		]);
		$this->form_validation->set_rules('asal_kota', 'Asal Kota', 'required|trim', [
			'required' => 'Mohon Lengkapi Asal Kota Anda'
		]);
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim', [
			'required' => 'Mohon Lengkapi Tanggal Lahir Anda'
		]);
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Registration';
			$this->load->view('layout/header');
			$this->load->view('user/registrasi');
			$this->load->view('layout/footer');
		} else {
			$data = [
				'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'gender' => htmlspecialchars($this->input->post('gender', true)),
				'asal_kota' => htmlspecialchars($this->input->post('asal_kota', true)),
				'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
				'role' => "Member",
				'date_created' => date('Y-m-d H:i:s'),
				'gambar' => "default.jpg"
			];
			$this->userrole->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat!
      Akunmu berhasil di daftar, Silahkan Login </div>');
			redirect('User');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout</div>');
		redirect('General');
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