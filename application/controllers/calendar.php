<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 18:10
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {

    function Calendar(){
        parent::__construct();

        if(!$this->session->userdata('logged')){
            redirect('login');
        }
		
		$this->load->helper('breadcrumbs');
		$this->load->helper('search');
    }

    public function index(){

        $this->load->model('calendar_model');
        $this->load->model('lawsuit_model');
		$breadcrumbs = array(
			array( 'label' => 'Painel de controle', 'url' => base_url() ),
			array( 'label' => 'Calendário', 'active' => TRUE )
		);
		
		$data['search']      = getSearch();
		$data['breadcrumbs'] = generateBreadcrumbs($breadcrumbs);
        $data['page_title']  = "Calendar";
        $data['events']      =  $this->calendar_model->calendar();
        $data['lawsuits']    = $this->lawsuit_model->get(false);
       // $this->load->model('calendar_model');
        // Load View
        $this->template->show('calendar', $data);

    }

    public function add(){
        //TODO
        //$user = $this->session->userdata('user');
        $this->load->model('calendar_model');
        $this->load->model('user_model');

		
		$breadcrumbs = array(
			array( 'label' => 'Painel de controle', 'url' => base_url() ),
			array( 'label' => 'Calendário', 'url' => base_url('calendar') ),
			array( 'label' => 'Adicionar Evento', 'active' => TRUE )
		);

        $users = $this->user_model->get();
        $data['lawyers'] = array( '' => 'Selecione um advogado...' );
        foreach( $users as $user ) $data['lawyers'][$user['id']] = $user['nome'];

		$data['search']             = getSearch();
		$data['breadcrumbs']        = generateBreadcrumbs($breadcrumbs);
        $data['page_title']         = "Novo evento";
        $data['startDate']          = '';
        $data['endDate']            = '';
        $data['title']              = '';
        $data['last_user_update']   = '';
        $data['last_update']        = '';
        $data['user_fk']            = $user;
        //$data['lawyer']

        $this->template->show('calendar_add', $data);
    }
	
	public function edit($id){
		$this->load->model('calendar_model');
        $this->load->model('user_model');
        $data = $this->calendar_model->get($id);
		
        $breadcrumbs = array(
			array( 'label' => 'Painel de controle', 'url' => base_url() ),
			array( 'label' => 'Calendário', 'url' => base_url('calendar') ),
			array( 'label' => 'Adicionar Evento', 'active' => TRUE )
		);

        $users = $this->user_model->get();
        $data['lawyers'] = array( '' => 'Selecione um advogado...' );
        foreach( $users as $user ) $data['lawyers'][$user['id']] = $user['nome'];

		$data['breadcrumbs'] = generateBreadcrumbs($breadcrumbs);
		$data['search']      = getSearch();
		//TODO

        $data['search']      = getSearch();
		$data['breadcrumbs'] = generateBreadcrumbs($breadcrumbs);
        $data['page_title']  = "Editar evento";

        $this->template->show('calendar_add', $data);
    }

    public function save(){
        $this->load->model('calendar_model');

        /*$startDate = $this->input->post('startDate');
        $startDate = date('Y-m-d h:i:s', strtotime(str_replace('-', '/', $startDate)));

        $endDate = $this->input->post('endDate');
        $endDate = date('Y-m-d h:i:s', strtotime(str_replace('-', '/', $endDate)));
        */

        if($this->input->post('startDate')){
            $startDate = $this->input->post('startDate');
            //echo $data_nasc.'<br>';exit;
            $startDate = DateTime::createFromFormat('d/m/Y H:i:s', $startDate);
            $startDate = $startDate->format('Y-m-d H:i:s');
            //$startDate = date('Y-m-d', strtotime(str_replace('-', '/', $startDate)));
            //echo $startDate.'<br>';exit;
        }else{
            $startDate = '0000-00-00 00:00:00';
        }

        if($this->input->post('endDate')){
            $endDate = $this->input->post('endDate');
            //echo $data_nasc.'<br>';exit;
            $endDate = DateTime::createFromFormat('d/m/Y H:i:s', $endDate);
            $endDate = $endDate->format('Y-m-d H:i:s');
            //$endDate = date('Y-m-d', strtotime(str_replace('-', '/', $endDate)));
            //echo $endDate.'<br>';exit;
        }else{
            $endDate = '0000-00-00 00:00:00';
        }

        $sql_data = array(
            'user_fk'              => $this->input->post('user_id'),
            'title'                => $this->input->post('title'),
            //'status'               => $this->input->post('status'),
            //'last_user_update'     => $this->input->post('last_user_update'),
            'startDate'            => $startDate,
            'endDate'              => $endDate
        );


        if ($this->input->post('id')){
            $this->calendar_model->update($this->input->post('id'),$sql_data);
        }else{
            $this->calendar_model->create($sql_data);
        }

        redirect('calendar');
    }

    public function remove($id){
        $this->load->model('calendar_model');
        $this->calendar_model->delete($id);

        redirect('calendar');
    }
}

?>