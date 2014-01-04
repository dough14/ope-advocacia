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

    public function validate(){
        $this->load->model('user_model');
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
