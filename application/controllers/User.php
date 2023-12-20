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
	{
		$this->load->view('layout/header');
		$this->load->view('user/registrasi');
		$this->load->view('layout/footer');
	}
	public function formDonasi()
	{
		$this->load->view('layout/header');
		$this->load->view('user/formDonasi');
		$this->load->view('layout/footer');
	}
	function tambah()
	{
        $data['judul'] = "Form Donasi";
       
        $data['prodi'] = $this->Donatur_model->get();
        $this->form_validation->set_rules('nama_donatur', 'nama_donatur', 'required', ['required' => 'Nama Lengkap Wajib di isi']);
        $this->form_validation->set_rules('email', 'email', 'required', ['required' => 'Email Wajib di isi']);
        $this->form_validation->set_rules('no_hp', 'no_hp', 'required', ['required' => 'No Hp Wajib di isi']);
        $this->form_validation->set_rules('nominal', 'nominal', 'required', ['required' => 'nominal Wajib di isi']);
        
       
    if ($this->form_validation->run() == false) {
        $this->load->view("layout/header", $data);
        $this->load->view("prodi/formDonasi", $data);
        $this->load->view("layout/footer");
    } else {
        $data = [
            'nama_donatur'=> $this->input->post('nama_donatur'),
            'email'=> $this->input->post('email'),
            'no_hp'=> $this->input->post('no_hp'),
            'nominal'=> $this->input->post('nominal'),
			'tanggal_donasi' => time()
            
    ];
    $upload_image=$_FILES['gambar']['name']; 
    if ($upload_image) { 
	$config['allowed types']='gif|jpg|png';
	$config['max_size'] = "2048"; 
	$config['upload_path']='/assets/img/bukti/';
	$this->load->library('upload', $config); 
	if ($this->upload->do_upload('gambar')) {
	$new_image=$this->upload->data('file_name'); 
	$this->db->set('gambar', $new_image); } 
    else {
	echo $this->upload->display_errors();
	}
    }
    $this->Donatur_model->insert($data,$upload_image);
    $this->session->set_flashdata('message', '<div class="alert alert-success"role="alert">Donasi Berhasil Terima Kasih</div>');
    redirect('User');
    }
}

}


/* End of file User.php */
/* Location: ./application/controllers/User.php */