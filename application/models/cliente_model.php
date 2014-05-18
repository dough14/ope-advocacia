<?php
class Cliente_model extends CI_Model {
    //cliente levels
    //public $CLIENTE_TIPO_PROCESSO = 1;

    public function get($id = false){
        if ($id) $this->db->where('id', $id);
        $this->db->order_by('nome', 'asc')->where('deleted_at IS NULL', NULL)->where('cpf != 0');
        $get = $this->db->get('cliente');
        if($id) return $get->row_array();
        if($get->num_rows > 0) return $get->result_array();

        return array();
    }
    public function getpj($id = false){
        if ($id) $this->db->where('id', $id);
        $this->db->order_by('nome', 'asc')->where('deleted_at IS NULL', NULL)->where('cpf = 0');
        $get = $this->db->get('cliente');
        if($id) return $get->row_array();
        if($get->num_rows > 0) return $get->result_array();

        return array();
    }

    public function searchBy($field = NULL, $value = NULL){
        if( empty($field) || empty($value) ) return FALSE;

        if( is_array($field) && is_array($value) ){
            foreach( $field as $key => $_field ) $this->db->or_where($_field.' LIKE', '%'.$value[$key].'%');
            $this->db->where('deleted_at != NULL');
            $this->db->where('deleted_at IS NULL');
            $this->db->order_by($field[0], 'asc');
        }elseif( is_array($field) ){
            foreach( $field as $key => $_field ) $this->db->or_where($_field.' LIKE', '%'.$value.'%');
            $this->db->where('deleted_at IS NULL');
            $this->db->order_by($field[0], 'asc');
        }else{
            $this->db->where($field.' LIKE', '%'.$value.'%');
            $this->db->where('deleted_at IS NULL');
            $this->db->order_by($field, 'asc');
        }

        return $this->db->get('cliente')->result_array();
    }

    public function searchByPj($field = NULL, $value = NULL){
        if( empty($field) || empty($value) ) return FALSE;

        if( is_array($field) && is_array($value) ){
            foreach( $field as $key => $_field ) $this->db->or_where($_field.' LIKE', '%'.$value[$key].'%');
            $this->db->order_by($field[0], 'asc')->where('cpf = 0');
        }elseif( is_array($field) ){
            foreach( $field as $key => $_field ) $this->db->or_where($_field.' LIKE', '%'.$value.'%');
            $this->db->order_by($field[0], 'asc')->where('cpf = 0');
        }else{
            $this->db->where($field.' LIKE', '%'.$value.'%')->where('cpf = 0');
            $this->db->order_by($field, 'asc');
        }

        return $this->db->get('cliente')->result_array();
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
        $this->db->update('cliente', array('deleted_at' => date('Y-m-d H:i:s')));
    }
}