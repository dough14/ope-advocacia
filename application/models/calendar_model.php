<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class calendar_model extends CI_Model {

	public function calendar(){

        $query = $this->db->get('calendar');
        $events = array();
        //var_dump($query->result());exit;
        foreach($query->result() as $event){
            $events[] = $event;
        }
      //  var_dump($query);exit;
        return $events;

	}
	
	public function get($id = false){
		if ($id) $this->db->where('id', $id);
		$this->db->order_by('title', 'asc');
		$get = $this->db->get('calendar');
		if($id) return $get->row_array();
		if($get->num_rows > 0) return $get->result_array();

		return array();
	}
	
	public function create($data){

        return $this->db->insert('calendar', $data);
	}

    public function update($id, $data){
        //@TODO

        //return $update;
    }

    public function delete($id){
        //@TODO

        /*$this->db->where('id', $id);
        $this->db->delete('user');*/
    }
}