<?php
class Lawsuit_model extends CI_Model {
    //cliente levels
    //public $CLIENTE_TIPO_PROCESSO = 1;

	public function get($id = false){
		
		$this->db->select('lawsuits.*, user.nome AS lawyer, cliente.nome AS customer');
		$this->db->from('lawsuits');
		$this->db->join('cliente', 'cliente.id = lawsuits.cliente_id', 'LEFT');
		$this->db->join('user', 'user.id = lawsuits.user_id', 'LEFT');
		
		if ($id) $this->db->where('lawsuits.id', $id);
		$this->db->order_by('lawsuits.start_date', 'desc');
		
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