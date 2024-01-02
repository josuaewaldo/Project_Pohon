<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Event_model extends CI_Model
{
    public $table = 'Event';
    public $id = 'event.id_event';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {

        $this->db->from($this->table);
        ;
        $this->db->where('id_event', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function updateJumlahVolunteer($id_event)
    {
        $this->db->set('jumlah_volunteer', 'jumlah_volunteer + 1' , false);
        $this->db->where('id_event', $id_event);
        $this->db->update($this->table);

        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {

        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
?>