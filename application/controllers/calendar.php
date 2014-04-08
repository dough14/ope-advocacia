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
		
		$breadcrumbs = array(
			array( 'label' => 'Dashboard', 'url' => base_url() ),
			array( 'label' => 'Calendário', 'active' => TRUE )
		);
		
		$data['breadcrumbs'] = generateBreadcrumbs($breadcrumbs);
        $data['page_title']  = "Calendar";
        $data['events']      =  $this->calendar_model->calendar();
       // $this->load->model('calendar_model');
        // Load View
        $this->template->show('calendar', $data);

    }

    public function add(){
        //TODO
        $user = $this->session->userdata('user');
		
		$breadcrumbs = array(
			array( 'label' => 'Dashboard', 'url' => base_url() ),
			array( 'label' => 'Calendário', 'url' => base_url('calendar') ),
			array( 'label' => 'Adicionar Evento', 'active' => TRUE )
		);
		
		$data['breadcrumbs'] = generateBreadcrumbs($breadcrumbs);
        $data['page_title']         = "Novo evento";
        $data['startDate']          = '';
        $data['endDate']            = '';
        $data['title']              = '';
        $data['last_user_update']   = '';
        $data['last_update']        = '';
        $data['user_fk']            = $user;


        $this->template->show('calendar_add', $data);
    }

    public function save(){
        $this->load->model('calendar_model');

        $startDate = $this->input->post('startDate');
        $startDate = date('Y-m-d', strtotime(str_replace('-', '/', $startDate)));

        $endDate = $this->input->post('endDate');
        $endDate = date('Y-m-d', strtotime(str_replace('-', '/', $endDate)));
        //echo $data_nasc.'<br>';

        $sql_data = array(
            'user_fk'              => $this->input->post('user_fk'),
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

}

?>