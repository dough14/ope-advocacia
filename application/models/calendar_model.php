<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class calendar_model extends CI_Model {

	public function calendar(){
		$this->db->select('calendar.*, user.color AS color')
			 ->from('calendar')
			 ->join('user', 'user.id = calendar.user_fk', 'left');
        
		$query = $this->db->get();
		
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
        //var_dump($data);exit;
        $save = $this->db->insert('calendar', $data);

        if($save == true){
            return true;
        }else{
            return false;
        }
        //return $this->db->insert('calendar', $data);
	}

    public function update($id, $data){
        $this->db->where('id', $id);
        $update = $this->db->update('calendar', $data);

        return $update;
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('calendar');
    }
}