<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Donation
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

class Donation extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Donasi_model');
    $this->load->model('Donatur_model');
  }

  public function index()
  {
    $id_donasi = $this->Donasi_model->get_id_donasi(); 
    $this->session->set_userdata('id_donasi', $id_donasi);
    $this->load->view('layout/header');
    $this->load->view('user/formDonasi');
    $this->load->view('layout/footer');
  }
  function tambah()
  {
    $this->form_validation->set_rules('nama_donatur', 'nama_donatur', 'required', ['required' => 'Nama Lengkap Wajib di isi']);
    $this->form_validation->set_rules('email', 'email', 'required', ['required' => 'Email Wajib di isi']);
    $this->form_validation->set_rules('no_hp', 'no_hp', 'required', ['required' => 'No Hp Wajib di isi']);
    $this->form_validation->set_rules('nominal', 'nominal', 'required', ['required' => 'nominal Wajib di isi']);

    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header");
      $this->load->view("User/formDonasi");
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama_donatur' => $this->input->post('nama_donatur'),
        'email' => $this->input->post('email'),
        'no_hp' => $this->input->post('no_hp'),
        'nominal' => $this->input->post('nominal'),
        'id_donasi' => $this->input->post('id_donasi'),
        'tanggal_donasi' => date('Y-m-d H:i:s')
      ];
      $upload_image = $_FILES['bukti_pembayaran']['name'];
      if ($upload_image) {
        $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif';
        $config['max_size'] = "5120";
        $config['upload_path'] = './assets/img/bukti/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('bukti_pembayaran')) {
          $new_image = $this->upload->data('file_name');
          $this->db->set('bukti_pembayaran', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $this->Donatur_model->insert($data, $upload_image);
      $this->Donasi_model->updateTotalDonasi($data['id_donasi'], $data['nominal']);
      $this->session->set_flashdata('message', '<div class="alert alert-success"role="alert">Donasi Berhasil Terima Kasih</div>');
      redirect('General');
    }
  }

}


/* End of file Donation.php */
/* Location: ./application/controllers/Donation.php */