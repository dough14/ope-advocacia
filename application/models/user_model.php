<?php
class User_model extends CI_Model {
    private $salt = 'xVjaD2M3aTzr3tCSR3Tp';
    public $USER_LEVEL_ADMIN = 1;
    public $USER_LEVEL_ADVG = 2;
    public $USER_LEVEL_ATD = 3;
    public $USER_LEVEL_AJU = 4;

	public function get($id = false){
		if ($id) $this->db->where('id', $id);
		$this->db->order_by('login', 'asc');
		$get = $this->db->get('user');
		if($id) return $get->row_array();
		if($get->num_rows > 0) return $get->result_array();
		return array();
	}
	
	public function create($data){
	$data['password'] = sha1($data['password'].$this->salt);
	return $this->db->insert('user', $data);
	}
	
	
}