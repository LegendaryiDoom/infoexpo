<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EmpresaModel extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    public function getEmpresa($id = FALSE){

        if($id === FALSE){
            $this->db->order_by('id_emp','asc');
            $query = $this->db->get('empresas');
            return $query->result_array();
        }
        $this->db->where('id_emp', $id);
        $query = $this->db->get_where('empresas');
        return $query->result_array();
    }
    public function add(){
        $data = array(
            'nombreE' => $this->input->post('nombreE'),
            'correoE' => $this->input->post('correoE'),
            'direccionE' => $this->input->post('direccionE'),
            'telefonoE' => $this->input->post('telefonoE'),
            'categoria' => $this->input->post('categoria'),
        );
        return $this->db->insert('empresas',$data);
    }
    public function contador($id){
        $query = $this->db->query("update empresas set visitasE = (SELECT visitasE from empresas where 
        id_emp = $id) + 1 where id_emp=$id");
    }
    
    public function delete($id){
        $this->db->delete('empresas', array('id_emp'=>$id));
    }
    public function editCrud($id)
    {
        $update = array(
            'nombreE' => $this->input->post('nombreE'),
            'correoE' => $this->input->post('correoE'),
            'direccionE' => $this->input->post('direccionE'),
            'telefonoE' => $this->input->post('telefonoE'),
            'categoria' => $this->input->post('categoria'),
            );
       
        $this->db->where('id_emp',$id);
        return $this->db->update('empresas', $update);
    }
    public function update($id, $empresa){

        $this->db->where('id_emp', $id);
        $this->db->set('empresa', $empresa);
        return $this->db->update('empresas');
    }
}
?>