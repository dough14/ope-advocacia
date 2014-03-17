<?php
class calendar_model extends CI_Model {

	public function getCalendar($id = false){
		if ($id) $this->db->where('id', $id);
		$this->db->order_by('startDate', 'asc');
		$get = $this->db->get('calendar');
		if($id) return $get->row_array();
		if($get->num_rows > 0) return $get->result_array();

		return array();
	}
	
	public function create($data){

        var_dump($data);

        //return $this->db->insert('user', $data);
	}

    public function update($id, $data){
        if(isset($data['password'])){
            $data['password'] = sha1($data['password'].$this->salt);
        }
        $this->db->where('id', $id);
        $update = $this->db->update('user', $data);

        return $update;
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
}