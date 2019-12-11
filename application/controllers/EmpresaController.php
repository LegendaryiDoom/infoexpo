<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmpresaController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('EmpresaModel');
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
        $data['empresas'] = $this->EmpresaModel->getEmpresa();
 
        $data['main_title'] = 'Empresas';
        $data['title2'] = "Listado de empresas";
        $this->load->view('templates/header', $data);
        $this->load->view('empresas/list', $data);
        $this->load->view('templates/footer');
    }
    public function ver()
    {
        

        $this->load->helper('form');

        $this->load->library('form_validation');
        $data['empresas'] = $this->EmpresaModel->getEmpresa();
 
        $data['main_title'] = 'Empresas';
        $data['title2'] = "Listado de empresas";
        $this->load->view('templates/header3', $data);
        $this->load->view('empresas/ver', $data);
        $this->load->view('templates/footer');
    }
    function news() {
        if (!$this->session->userdata('logeado'))
        {
            redirect('login');
        }

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombreE', 'Nombre de la empresa', 'required');
        $this->form_validation->set_rules('correoE', 'Correo electronico', 'required');
        $this->form_validation->set_rules('direccionE', 'Dirección de la empresa', 'required');
        $this->form_validation->set_rules('telefonoE', 'Telefono de la empresa', 'required');
        $this->form_validation->set_rules('categoria', 'Categoria de la empresa', 'required');

        if ($this->form_validation->run() === false) {
            $data['empresas'] = $this->EmpresaModel->getEmpresa();
            $data['main_title'] = 'Empresas';
            $data['title2'] = "Listado de empresas";
            $this->load->view('templates/header', $data);
            $this->load->view('empresas/list', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            $data['empresas'] = $this->EmpresaModel->add();        }
      
    }
    public function edit($id){
        if (!$this->session->userdata('logeado'))
        {
            redirect('login');
        }
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['empresas'] = $this->EmpresaModel->getEmpresa($id);

        $this->load->view('templates/header');
        $this->load->view('empresas/edit', $data);
        $this->load->view('templates/footer');
    }
    public function detalle($id){
        

        $data['empresas'] = $this->EmpresaModel->getEmpresa($id);
        if(count($data['empresas']) ==1 ) $this->EmpresaModel->contador($id);

        $this->load->view('templates/header3');
        $this->load->view('empresas/detalle', $data);
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
        $this->form_validation->set_rules('nombreE', 'Nombre de la empresa', 'required');
        $this->form_validation->set_rules('correoE', 'Correo electronico', 'required');
        $this->form_validation->set_rules('direccionE', 'Dirección de la empresa', 'required');
        $this->form_validation->set_rules('telefonoE', 'Telefono de la empresa', 'required');
        $this->form_validation->set_rules('categoria', 'Categoria de la empresa', 'required');
        if ($this->form_validation->run() == FALSE) {
           
            redirect('empresas/edit/'.$id);
        }else{
            $data['empresas'] = $this->EmpresaModel->editCrud($id);
            redirect('empresas');

        }
    }
    function delete(){
        if (!$this->session->userdata('logeado'))
        {
            redirect('login');
        }

        $id = $this->input->get('id_emp');
        $resultado = $this->EmpresaModel->getEmpresa($id);
        if(count($resultado) > 0)
        {
            $this->EmpresaModel->delete($id);
            redirect('empresas');
        }

    }}