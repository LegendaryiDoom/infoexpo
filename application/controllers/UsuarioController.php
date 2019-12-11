<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuarioController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('UsuarioModel');
        $this->load->helper('url');
        $this->load->library('calendar');
        $this->load->library(array('form_validation','session'));
    }

    public function index()
    {
        if (!$this->session->userdata('logeado'))
        {
            redirect('login');
        }

        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['usuarios'] = $this->UsuarioModel->getUsuario();
        $data['main_title'] = 'Usuarios';
        $data['title2'] = "Listado de usuarios";
        $this->load->view('templates/header', $data);
        $this->load->view('usuarios/list', $data);
        $this->load->view('templates/footer');
    }
    function news() {
        if (!$this->session->userdata('logeado'))
        {
            redirect('login');
        }

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombreU', 'Nombre del usuario', 'required');
        $this->form_validation->set_rules('correoU', 'Correo electronico', 'required');
        $this->form_validation->set_rules('contraU', 'Contraseña del usuario', 'required');
        $this->form_validation->set_rules('telefonoU', 'Telefono del usuario', 'required');

        if ($this->form_validation->run() === false) {
            $data['usuarios'] = $this->UsuarioModel->getUsuario();
            $data['main_title'] = 'Usuarios';
            $data['title2'] = "Listado de usuarios";
            $this->load->view('templates/header', $data);
            $this->load->view('usuarios/list', $data);
            $this->load->view('templates/footer');
        }
        else{
            $data['usuarios'] = $this->UsuarioModel->add();

           
        }
      
    }
    public function edit($id){
        if (!$this->session->userdata('logeado'))
        {
            redirect('login');
        } 
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['usuarios'] = $this->UsuarioModel->getUsuario($id);

        $this->load->view('templates/header');
        $this->load->view('usuarios/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update($id)
    {
        if (!$this->session->userdata('logeado'))
        {
            redirect('login');
        }

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombreU', 'Nombre del usuario', 'required');
        $this->form_validation->set_rules('correoU', 'Correo electronico', 'required');
        $this->form_validation->set_rules('contraU', 'Contraseña del usuario', 'required');
        $this->form_validation->set_rules('telefonoU', 'Telefono del usuario', 'required');


        if ($this->form_validation->run() == FALSE) {
            redirect('usuarios/edit/'.$id);
        }else{
            $data['usuarios'] = $this->UsuarioModel->editCrud($id);
            redirect('usuarios');
        }
    }
    function delete(){
        if (!$this->session->userdata('logeado'))
        {
            redirect('login');
        }

        $id = $this->input->get('id_usu');
        $resultado = $this->UsuarioModel->getUsuario($id);
        if(count($resultado) > 0)
        {
            $this->UsuarioModel->delete($id);
            redirect('usuarios');
        }

    }
}