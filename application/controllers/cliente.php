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
            4 => 'Outro',
        );
		
		$this->load->helper('breadcrumbs');
		$this->load->helper('search');
    }

    public function index(){
        // Load open transports
        $this->load->model('cliente_model');
		
		$breadcrumbs = array(
			array( 'label' => 'Painel de controle', 'url' => base_url() ),
			array( 'label' => 'Clientes', 'active' => TRUE )
		);
		
		$data['breadcrumbs'] = generateBreadcrumbs($breadcrumbs);
		$data['search'] = getSearch();
        $data['clientes'] = $this->cliente_model->get(false);
        $data['clientespj'] = $this->cliente_model->getpj(false);
        $data['tipos_processo'] = $this->tiposProcesso;

        $data['page_title']  = "Clientes";

        // Load View
        $this->template->show('clientes', $data);
    }

    public function add(){
        $breadcrumbs = array(
			array( 'label' => 'Painel de controle', 'url' => base_url() ),
			array( 'label' => 'Clientes', 'url' => base_url('cliente') ),
			array( 'label' => 'Novo', 'active' => TRUE )
		);
		
		$data['breadcrumbs'] = generateBreadcrumbs($breadcrumbs);
		$data['search'] = getSearch();
		//TODO

        $data['page_title']     = "Novo Cliente";
        $data['nome']           = '';
        $data['cpf']            = '';
        $data['cnpj']           = '';
        $data['rg']           = '';
        $data['tel']            = '';
        $data['tel2']           = '';
        $data['cel']            = '';
        $data['tel_alt']        = '';
        $data['contatar']       = '';
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
        if(isset($_GET["view"])){
            $data = $this->cliente_model->getpj($id);
        }else{
            $data = $this->cliente_model->get($id);
        }
		
        $breadcrumbs = array(
			array( 'label' => 'Painel de controle', 'url' => base_url() ),
			array( 'label' => 'Clientes', 'url' => base_url('cliente') ),
			array( 'label' => 'Editar', 'active' => TRUE )
		);
		$data['search'] = getSearch();
		$data['breadcrumbs'] = generateBreadcrumbs($breadcrumbs);

        $data['page_title']  = "Editar Cliente # ".$data['nome'];
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
        if(isset($data_nasc)){
            $data_nasc = $this->input->post('data_nasc');
            //echo $data_nasc.'<br>';exit;
            $data_nasc = DateTime::createFromFormat('d/m/Y', $data_nasc);
            $data_nasc = $data_nasc->format('Y-m-d');
            //$data_nasc = date('Y-m-d', strtotime(str_replace('-', '/', $data_nasc)));
            //echo $data_nasc.'<br>';exit;
        }else{
            $data_nasc = '0000-00-00';
        }
        $sql_data = array(
            'nome'               => $this->input->post('nome'),
            'cpf'                => $this->input->post('cpf'),
            'cnpj'               => $this->input->post('cnpj'),
            'rg'                 => $this->input->post('rg'),
            'tel'                => $this->input->post('tel'),
            'tel2'               => $this->input->post('tel2'),
            'tel_alt'            => $this->input->post('tel_alt'),
            'contatar'           => $this->input->post('contatar'),
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