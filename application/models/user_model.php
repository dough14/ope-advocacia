<?php
class User_model extends CI_Model {
    private $salt = 'xVjaD2M3aTzr3tCSR3Tp';
    //user levels
    public $USER_LEVEL_ADM = 1;
    public $USER_LEVEL_ADV = 2;
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

    public function validate($login, $password){

        $this->db->where('login', $login)->where('password', sha1($password.$this->salt));

        $get = $this->db->get('user');
        //echo $this->db->last_query();
        if($get->num_rows > 0){
            return $get->row_array();
        }

        return array();
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