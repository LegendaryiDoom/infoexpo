<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsuarioModel');
        $this->load->library(array('form_validation','session'));
        $this->load->helper(array('url','html','form'));
        $this->user_id = $this->session->userdata('user_id');
    }
    public function index(){
        $this->load->view('templates/header2');
        $this->load->view('auth/login');
        $this->load->view('templates/footer');

    }
    public function register(){
        //if (!$this->session->userdata('user_id')){redirect('login');}   
        $this->load->view('templates/header2');
        $this->load->view('auth/register');
    }
    public function post_login(){
        
        $this->form_validation->set_rules('correoU', 'Email', 'required');
        $this->form_validation->set_rules('contraU', 'Password', 'required');

        if ($this->form_validation->run() === FALSE)
        {  
            $this->load->view('templates/header2');
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        }
        else
        {   
            $data = array(
               'correoU' => $this->input->post('correoU'),
               'contraU' => md5($this->input->post('contraU')),
             );
            $check = $this->UsuarioModel->auth_check($data);
            if($check != false){
                 $user = array(
                     'logeado' => true,
                    'id_usu' => $check->id_usu,
                    'nombreU' => $check->nombreU,
                    'correoU' => $check->correoU,
                    'telefonoU' => $check->telefonoU
                );
            $this->session->set_userdata($user);            
             redirect( base_url('empresas') ); 
            }
            $this->load->view('templates/header2');
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        }
    }
    public function post_register()
    {
        //if (!$this->session->userdata('user_id')){redirect('login');}   
        $this->form_validation->set_rules('nombreU', 'Nombre completo', 'required');
        $this->form_validation->set_rules('correoU', 'Correo', 'required');
        $this->form_validation->set_rules('telefonoU', 'Telefono', 'required');
        $this->form_validation->set_rules('contraU', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div class="">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
        if ($this->form_validation->run() === FALSE)
        {  
            $this->load->view('templates/header2');
            $this->load->view('auth/register');
        }
        else
        {   
            $data = array(
                'nombreU' => $this->input->post('nombreU'),
                'correoU' => $this->input->post('correoU'),
                'telefonoU' => $this->input->post('telefonoU'),
                'contraU' => md5($this->input->post('contraU')),
 
             );
   
            $check = $this->UsuarioModel->insert_user($data);
 
            if($check != false){
                $user = array(
                    'user_id' => $check,
                    'nombreU' => $this->input->post('nombreU'),
                    'correoU' => $this->input->post('correoU'),
                    'telefonoU' => $this->input->post('telefonoU'),
                    'contraU' => md5($this->input->post('contraU')),
                );
             }
             $this->session->set_userdata($user);
             $this->load->view('templates/header2');
             $this->load->view('auth/login');
             $this->load->view('templates/footer');
        }         
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('auth'));
       } 
}