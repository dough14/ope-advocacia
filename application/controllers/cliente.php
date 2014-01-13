<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 22:43
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {
    private $LEVEL;
    function User() {
        parent::__construct();
        if(!$this->session->userdata('logged'))
            redirect('login');

        $this->LEVEL = array(
            1 => 'Administrador - Acesso total',
            2 => 'Advogado - Acesso ao seu perfil',
            3 => 'Atendente - Acesso a todas agendas',
            4 => 'Ajudante - Acesso a todas agendas'
        );
    }

    public function index(){
        // Load open transports
        $this->load->model('cliente_model');
        $data['clientes'] = $this->cliente_model->get(false);
        $data['level_list'] = $this->LEVEL;

        $data['page_title']  = "Clientes";

        // Load View
        $this->template->show('clientes', $data);
    }

    public function add(){
        //TODO

        $data['page_title']  = "Novo Cliente";
        $data['nome']    = '';
        $data['cpf']    = '';
        $data['tel'] = '';
        $data['data_nasc'] = '';
        $data['level']    = '1';
        $data['level_list'] = $this->LEVEL;

        $this->template->show('clientes_add', $data);
    }

    public function edit($id){
        $this->load->model('cliente_model');
        $data = $this->user_model->get($id);

        $data['page_title']  = "Editar Cliente #".$data['nome'];
        $data['level_list'] = $this->LEVEL;

        $this->template->show('clientes_add', $data);
    }

    public function remove($id){
        $this->load->model('cliente_model');
        $this->user_model->delete($id);

        redirect('cliente');
    }

    public function save(){
        $this->load->model('cliente_model');

        $sql_data = array(
            'nome'    => $this->input->post('nome'),
            'cpf'    => $this->input->post('cpf'),
            'tel'    => $this->input->post('tel'),
            'data_nasc'    => $this->input->post('data_nasc'),
            'level'    => $this->input->post('level')
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

