<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
    function Search() {
        parent::__construct();

        if(!$this->session->userdata('logged'))
            redirect('login');
		
		$this->load->helper('breadcrumbs');
		$this->load->helper('search');
    }

    public function index(){
        $this->load->model('cliente_model');
		
		// Load open transports
		$breadcrumbs = array(
			array( 'label' => 'Resultados da Pesquisa', 'active' => TRUE )
		);
		
		$data['breadcrumbs'] = generateBreadcrumbs($breadcrumbs);
		$data['search'] = getSearch();
		
		$search = $this->input->get('search', TRUE);
		
		$data['clientes'] = '';
        $data['clientespj'] = '';
		
		if( strstr($search, '.') ) $data['clientes'] = $this->cliente_model->searchBy('cpf', $search);
		elseif( strstr($search, '/') ){
			$dob = implode('-',array_reverse(explode('/', $search)));
			$data['clientes'] = $this->cliente_model->searchBy(array('data_nasc','date_created'), $dob);
		}elseif( strstr($search, '(') ) $data['clientes'] = $this->cliente_model->searchBy(array('tel', 'tel2', 'cel'), $search);
		else $data['clientes'] = $this->cliente_model->searchBy('nome', $search);

        if( strstr($search, '.') ) $data['clientespj'] = $this->cliente_model->searchBy('cnpj', $search);
        elseif( strstr($search, '/') ){
            $dob = implode('-',array_reverse(explode('/', $search)));
            $data['clientespj'] = $this->cliente_model->searchBy(array('data_nasc','date_created'), $dob);
        }elseif( strstr($search, '(') ) $data['clientespj'] = $this->cliente_model->searchBy(array('tel', 'tel2', 'cel'), $search);
        else $data['clientespj'] = $this->cliente_model->searchBy('nome', $search);
		
        $data['page_title']  = "Procurar";

        // Load View
        $this->template->show('search', $data);
    }
}

?>