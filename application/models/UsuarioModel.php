<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class UsuarioModel extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    public function auth_check($data){
        $query = $this->db->get_where('usuarios', $data);
        if($query){   
         return $query->row();
        }
        return false;
    }
    public function insert_user($data)
    {
        $insert = $this->db->insert('usuarios', $data);
        if ($insert) {
           return $this->db->insert_id();
        } else {
            return false;
        }
    }



    public function getUsuario($id = FALSE){

        if($id === FALSE){
            $this->db->order_by('id_usu','asc');
            $query = $this->db->get('usuarios');
            return $query->result_array();
        }
        $this->db->where('id_usu', $id);
        $query = $this->db->get_where('usuarios');
        return $query->result_array();
    }
    public function add(){
        $data = array(
            'nombreU' => $this->input->post('nombreU'),
            'correoU' => $this->input->post('correoU'),
            'contraU' => $this->input->post('contraU'),
            'telefonoU' => $this->input->post('telefonoU'),
        );
        return $this->db->insert('usuarios',$data);
    }
    public function delete($id){
        $this->db->delete('usuarios', array('id_usu'=>$id));
    }
    public function editCrud($id)
    {
        $update = array(
            'nombreU' => $this->input->post('nombreU'),
            'correoU' => $this->input->post('correoU'),
            'contraU' => $this->input->post('contraU'),
            'telefonoU' => $this->input->post('telefonoU'),
            );
       
        $this->db->where('id_usu',$id);
        return $this->db->update('usuarios', $update);
    }
    public function update($id, $usuario){
        $this->db->where('id_usu', $id);
        $this->db->set('usuarios', $usuario);
        return $this->db->update('usuarios');
    }
}
?>