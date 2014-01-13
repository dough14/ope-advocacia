<?php
class Cliente_model extends CI_Model {
    //cliente levels
    //public $CLIENTE_TIPO = 1;

	public function get($id = false){
		if ($id) $this->db->where('id', $id);
		$this->db->order_by('nome', 'asc');
		$get = $this->db->get('cliente');
		if($id) return $get->row_array();
		if($get->num_rows > 0) return $get->result_array();

		return array();
	}
	
	public function create($data){
        return $this->db->insert('cliente', $data);
	}

    public function update($id, $data){

        $this->db->where('id', $id);
        $update = $this->db->update('cliente', $data);

        return $update;
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('cliente');
    }
}