<?php
class Cliente_model extends CI_Model {
    //cliente levels
    //public $CLIENTE_TIPO_PROCESSO = 1;

	public function get($id = false){
		if ($id) $this->db->where('id', $id);
		$this->db->order_by('nome', 'asc');
		$get = $this->db->get('cliente');
		if($id) return $get->row_array();
		if($get->num_rows > 0) return $get->result_array();

		return array();
	}
	
	public function create($data){
    //$this->db->insert('cliente', $data);
    //$this->db->_compile_select();
    //echo $this->db->last_query();
    //exit;

    return $this->db->insert('cliente', $data);
}

    public function update($id, $data){

        $this->db->where('id', $id);

        //'data_nasc'    => $this->input->post('data_nasc'),

        $update = $this->db->update('cliente', $data);

        return $update;
    }
/*TODO delete changing the flag status*/
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('cliente');
    }
}