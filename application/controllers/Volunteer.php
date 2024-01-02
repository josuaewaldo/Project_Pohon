<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Event
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

class Volunteer extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Volunteer_model');
    $this->load->model('User_model');
    $this->load->model('Event_model');
  }

  public function index(){
    $id_user = $this->session->userdata('id_user');

    $user_data = $this->User_model->getById($id_user);

    $id_event = $this->input->get('id_event');
    $data_volunteer = array(
        'nama_lengkap' => $user_data['nama_lengkap'],
        'email' => $user_data['email'],
        'id_event' => $id_event,
        'tanggal_bergabung' => date('Y-m-d H:i:s')
    );

    $this->Volunteer_model->insert($data_volunteer);
    $this->Event_model->updateJumlahVolunteer($id_event);
    redirect('General');
  }


}


/* End of file Event.php */
/* Location: ./application/controllers/Event.php */