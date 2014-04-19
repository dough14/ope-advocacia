<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 18:10
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function Dashboard(){
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
			array( 'label' => 'Painel de controle', 'active' => TRUE )
		);
		
		$data['search'] = getSearch();
		$data['breadcrumbs'] = generateBreadcrumbs($breadcrumbs);
        $data['page_title']  = "Dashboard";
        $data['events']      =  $this->calendar_model->calendar();
       // $this->load->model('calendar_model');
        // Load View
        $this->template->show('dashboard', $data);

    }

    public function calendar(){
       // var_dump($this->model('calendar_model'));exit;



        $this->events = $this->calendar_model();

    }


}

?>