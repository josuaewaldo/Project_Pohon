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
  }

  public function index()
  {
    $this->load->view('layout/header');
		$this->load->view('user/beranda');
		$this->load->view('layout/footer');
  }

}


/* End of file General.php */
/* Location: ./application/controllers/General.php */