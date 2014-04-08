<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 22:43
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {
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
		
		$this->load->helper('breadcrumbs');
		$this->load->helper('search');
    }

    public function index(){
        // Load open transports
        $this->load->model('cliente_model');
		
		$breadcrumbs = array(
			array( 'label' => 'Dashboard', 'url' => base_url() ),
			array( 'label' => 'Clientes', 'active' => TRUE )
		);
		
		$data['breadcrumbs'] = generateBreadcrumbs($breadcrumbs);
		
        $data['clientes'] = $this->cliente_model->get(false);
        $data['tipos_processo'] = $this->tiposProcesso;

        $data['page_title']  = "Clientes";

        // Load View
        $this->template->show('clientes', $data);
    }

    public function add(){
        $breadcrumbs = array(
			array( 'label' => 'Dashboard', 'url' => base_url() ),
			array( 'label' => 'Clientes', 'url' => base_url('cliente') ),
			array( 'label' => 'Novo', 'active' => TRUE )
		);
		
		$data['breadcrumbs'] = generateBreadcrumbs($breadcrumbs);
		
		//TODO

        $data['page_title']     = "Novo Cliente";
        $data['nome']           = '';
        $data['cpf']            = '';
        $data['tel']            = '';
        $data['tel2']           = '';
        $data['cel']            = '';
        $data['data_nasc']      = '';
        $data['endereco']       = '';
        $data['cep']            = '';
        $data['uf']             = '';
        $data['processos']      = '1';
        $data['tipos_processo']  = $this->tiposProcesso;


        $this->template->show('clientes_add', $data);
    }

    public function edit($id){
		$this->load->model('cliente_model');
        $data = $this->cliente_model->get($id);
		
        $breadcrumbs = array(
			array( 'label' => 'Dashboard', 'url' => base_url() ),
			array( 'label' => 'Clientes', 'url' => base_url('cliente') ),
			array( 'label' => 'Editar', 'active' => TRUE )
		);
		
		$data['breadcrumbs'] = generateBreadcrumbs($breadcrumbs);

        $data['page_title']  = "Editar Cliente #".$data['nome'];
        $data['tipos_processo'] = $this->tiposProcesso;

        $this->template->show('clientes_add', $data);
    }

    public function remove($id){
        $this->load->model('cliente_model');
        $this->cliente_model->delete($id);

        redirect('cliente');
    }

    public function save(){
        $this->load->model('cliente_model');

        $data_nasc = $this->input->post('data_nasc');
        $data_nasc = date('Y-m-d', strtotime(str_replace('-', '/', $data_nasc)));
        //echo $data_nasc.'<br>';

        $sql_data = array(
            'nome'               => $this->input->post('nome'),
            'cpf'                => $this->input->post('cpf'),
            'tel'                => $this->input->post('tel'),
            'tel2'               => $this->input->post('tel2'),
            'cel'                => $this->input->post('cel'),
            'endereco'           => $this->input->post('endereco'),
            'cep'                => $this->input->post('cep'),
            'uf'                 => $this->input->post('uf'),
            'data_nasc'          =>  $data_nasc,
            'tipos_processo'     => $this->input->post('tipos_processo')
        );


        if ($this->input->post('id')){
            $this->cliente_model->update($this->input->post('id'),$sql_data);
        }else{
            $this->cliente_model->create($sql_data);
        }

        redirect('cliente');
    }
}

?>