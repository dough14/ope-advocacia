<?php
class Lawsuit_status_model extends CI_Model {
    //cliente levels
    //public $CLIENTE_TIPO_PROCESSO = 1;

	public function get($id = false){
		
		$this->db->select('*');
		$this->db->from('lawsuits_status');
		
		if ($id) $this->db->where('id', $id);
		$this->db->order_by('status', 'asc');
		
		$entries = $this->db->get();
		
		if($id) return $entries->row_array();
		
		if($entries->num_rows > 0) return $entries->result_array();

		return array();
	}
	
	public function create($data){
    //$this->db->insert('cliente', $data);
    //$this->db->_compile_select();
    //echo $this->db->last_query();
    //exit;

    return $this->db->insert('lawsuits', $data);
}

    public function update($id, $data){

        $this->db->where('id', $id);

        //'data_nasc'    => $this->input->post('data_nasc'),

        $update = $this->db->update('lawsuits', $data);

        return $update;
    }
/*TODO delete changing the flag status*/
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('lawsuits');
    }
}