<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class calendar_model extends CI_Model {

	public function getCalendar(){

		//if ($id) $this->db->where('id', $id);
		$this->db->order_by('startDate', 'asc');

		//if($id) return $get->row_array();
        $get = $this->db->get('calendar');

        if($get->num_rows > 0) return $get->result_array();

		return array();
        //return

	}
	
	public function create($data){

        var_dump($data);

        //return $this->db->insert('user', $data);
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