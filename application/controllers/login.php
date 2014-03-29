<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 18:05
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){
        // Load View
        $data['page_title']  = "Login";

        $data['login'] = '';
        $data['password'] = '';

        $this->template->show('login', $data);
    }
/*
    public function login(){
        $usuario = $this->input->post('username');
        $senha = $this->input->post('password');
        $this->db->where('login',$usuario);
        $this->db->where('password',$senha);
        //$this->db->where('ativo',1);
        $usuario = $this->db->get('users')->result();
        if(count($usuario)===1){
            $dados = array(
                'user'  => $usuario[0]->usuario,
                'logged' => TRUE
            );
            $this->session->set_userdata($dados);
            redirect('dashboard');
        }
        else{
            $this->template->show('login');
        }
    }*/
    public function validate(){
        //print_r($_POST);exit;
        $this->load->model('user_model');
        //var_dump($_POST);exit;
        $result = $this->user_model->validate($this->input->post('login'),$this->input->post('password'));
        //var_dump($result);
        //exit;

        if($result){
            $this->session->set_userdata(array(
                'logged' => true,
                'user'  => $result['id'],
                'level' => $result['level']
            ));

            redirect('dashboard');

        }else{
            // Load View
            $data['page_title']  = "Login";

            $data['login'] = $this->input->post('login');
            $data['password'] = $this->input->post('password');

            $data['error'] = true;

            $this->template->show('login', $data);

        }
    }

    public function logout(){
        $this->session->unset_userdata('logged');

        redirect('login');
    }
}
