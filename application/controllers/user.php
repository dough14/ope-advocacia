<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 22:43
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    private $LEVEL;
    function User() {
        parent::__construct();
        if(!$this->session->userdata('logged'))
            redirect('login');

        $this->LEVEL = array(
            1 => 'Administrador - acesso total',
            2 => 'Advogado - Acesso ao seu perfil',
            3 => 'Atendente - Acesso a todas agendas',
            4 => 'Ajudante - Acesso a todas agendas'
        );
    }

    public function index(){
        // Load open transports
        $this->load->model('user_model');
        $data['users'] = $this->user_model->get(false);
        $data['level_list'] = $this->LEVEL;

        $data['page_title']  = "Users";

        // Load View
        $this->template->show('users', $data);
    }

    public function add(){
        //TODO

        $data['page_title']  = "New User";
        $data['login']    = '';
        $data['email']    = '';
        $data['password'] = '';
        $data['level']    = '1';
        $data['level_list'] = $this->LEVEL;

        $this->template->show('users_add', $data);
    }

    public function edit($id){
        $this->load->model('user_model');
        $data = $this->user_model->get($id);

        $data['password'] = '';
        $data['page_title']  = "Editar Usuario #".$data['login'];

        $data['level_list'] = $this->LEVEL;

        $this->template->show('users_add', $data);
    }

    public function remove($id){
        $this->load->model('user_model');
        $this->user_model->delete($id);

        redirect('user');
    }

    public function save(){
        $this->load->model('user_model');

        $sql_data = array(
            'login'    => $this->input->post('login'),
            'level'    => $this->input->post('level')
        );

        if($this->input->post('reset_password')){
            $sql_data['password'] = $this->input->post('password');
        }

        if ($this->input->post('id')){
            $this->user_model->update($this->input->post('id'),$sql_data);
        }else{
            $this->user_model->create($sql_data);
        }

        redirect('user');
    }
}

?>

