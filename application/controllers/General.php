<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller General
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

class General extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Donasi_model');
    $this->load->model('Event_model');
  }

  public function index()
  {
    $data['donasi'] = $this->Donasi_model->get();
    $data['event'] = $this->Event_model->get();

    $total_donasi = 0;
    foreach ($data['donasi'] as $donasi) {
      $total_donasi += $donasi['total_donasi'];
    }

    $total_event = 0;
    foreach ($data['event'] as $event){
      $total_event += 1;
    }

    $data['total_donasi'] = $total_donasi;
    $data['pohon_tertanam'] = $total_donasi / 10000;
    $data['total_event'] = $total_event;
    $this->load->view('layout/header');
		$this->load->view('user/beranda', $data);
		$this->load->view('layout/footer');
  }



}


/* End of file General.php */
/* Location: ./application/controllers/General.php */