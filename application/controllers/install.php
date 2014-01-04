<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Install extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/install
	 *	- or -  
	 * 		http://example.com/index.php/install/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$data = array();

		// Check if users are already there
		$this->load->model('user_model');
		$users = $this->user_model->get();
		if($users){
			$data['already_installed'] = true;
		}else{
			$data['already_installed'] = false;
		}
	 
		// Load View
		$data['page_title']  = "Installation";
	 
		$data['login'] = '';
		$data['password'] = '';

        $this->template->show('login', $data);
	}
	
	public function run(){
		// Check if users are already there
		$this->load->model('user_model');
		$users = $this->user_model->get();
		if(!$users){
			$insert = array(
				'login' => $this->input->post('login'),
				'password' => $this->input->post('password'),
				'level' => $this->user_model->USER_LEVEL_ADM
			);
			$this->user_model->create($insert);
		}
	 
		// Load View
		$data['page_title']  = "Login";
	 
		$data['login'] = '';
		$data['password'] = '';

        $this->template->show('login', $data);
	}
}
