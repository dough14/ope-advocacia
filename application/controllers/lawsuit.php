<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 22:43
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lawsuit extends CI_Controller {
    private $tiposProcesso;
	
    function Cliente() {
        parent::__construct();
        
		if(!$this->session->userdata('logged'))
            redirect('login');

        $this->tiposProcesso = array(
            1 => 'Civil',
            2 => 'Previdenciario',
            3 => 'Trabalhista',
        );
    }

    public function index(){
        // Load open transports
        $this->load->model('lawsuit_model');
        $data['lawsuits'] = $this->lawsuit_model->get(false);
        // $data['tipos_processo'] = $this->tiposProcesso;

        $data['page_title']  = "Lawsuit";

        // Load View
        $this->template->show('lawsuit', $data);
    }

    public function add(){
        //TODO

		$this->load->model('cliente_model');
		$this->load->model('user_model');
        
		$customers = $this->cliente_model->get();
		$data['customers'] = array( '' => 'Selecione um cliente...' );
		foreach( $customers as $customer ) $data['customers'][$customer['id']] = $customer['nome'];
		
		$users = $this->user_model->get();
		$data['lawyers'] = array( '' => 'Selecione um advogado...' );
		foreach( $users as $user ) $data['lawyers'][$user['id']] = $user['nome'];
		
		// Foo data
		$data['code'] 	   = '';
		$data['customer']  = '';
		$data['lawyer']    = '';
		$data['esp']	   = '';
		$data['startDate'] = '';
		$data['note']	   = '';
		
        $this->template->show('lawsuit_add', $data);
    }

    public function edit($id = NULL){
        if( empty($id) ) return redirect('lawsuit/add', 'refresh');
		
		
		$this->load->model('lawsuit_model');
		$this->load->model('cliente_model');
		$this->load->model('user_model');
		
		$lawsuit = $this->lawsuit_model->get($id);
        
		$customers = $this->cliente_model->get();
		$data['customers'] = array( '' => 'Selecione um cliente...' );
		foreach( $customers as $customer ) $data['customers'][$customer['id']] = $customer['nome'];
		
		$users = $this->user_model->get();
		$data['lawyers'] = array( '' => 'Selecione um advogado...' );
		foreach( $users as $user ) $data['lawyers'][$user['id']] = $user['nome'];
		
		// Loaded data
		$data['id']		   = $id;
		$data['code'] 	   = $lawsuit['code'];
		$data['customer']  = $lawsuit['cliente_id'];
		$data['lawyer']    = $lawsuit['user_id'];
		$data['esp']	   = $lawsuit['type'];
		$data['startDate'] = implode('/',array_reverse(explode('-',$lawsuit['start_date'])));
		$data['note']	   = $lawsuit['note'];

        $this->template->show('lawsuit_add', $data);
    }

    public function remove($id){
        $this->load->model('lawsuit_model');
        $this->lawsuit_model->delete($id);

        redirect('lawsuit');
    }

    public function save(){
        $this->load->model('lawsuit_model');

        $start_date = explode('/', $this->input->post('start_date'));
		
        $start_date = date('Y-m-d', strtotime($start_date[2].'-'.$start_date[1].'-'.$start_date[0]));
		
        $sql_data = array(
            'code'       => $this->input->post('code'),
            'cliente_id' => $this->input->post('cliente_id'),
            'user_id'    => $this->input->post('user_id'),
            'type'       => $this->input->post('type'),
            'note'       => $this->input->post('note'),
            'start_date' => $start_date,
            'created_at' => $this->input->post('created_at'),
            'updated_at' => $this->input->post('updated_at')
        );


        if ($this->input->post('id')){
            $this->lawsuit_model->update($this->input->post('id'), $sql_data);
        }else{
            $this->lawsuit_model->create($sql_data);
        }

        redirect('lawsuit');
    }
}

?>