<?php

class Model_Usuario extends CI_Model{

    function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
    
    //Creo la funcion de Select * en SQL
    public function selPerfil() {
        $query = $this->db->query("Select * from perfil");
        //retornamos todos los registros de la tabla perfil
        return $query->result();
        
    }
    
    //Funcion para insertar usuario
    public function insertUsuario($idper, $nombres, $apellidos, $correo, $telefono) {
        /*Guardo los datos, en un array, donde el nombre de cada elemento del array son los MISMOS NOMBRES QUE
         * LOS CAMPOS DE LA BD
         */
        $arrayDatos = array(
            'per_id' => $idper,
            'usu_nombres' => $nombres,
            'usu_apellidos' => $apellidos,
            'usu_correo' => $correo,
            'usu_telefono' => $telefono
        );
        //utilizo la funcion por defecto de CI3 para insertar, con 2 parametros nombre de la tabla y datos.
        $this->db->insert('usuario', $arrayDatos);
        
    }
    
    //Funcion para listar usuarios
    public function listUsuario() {
        $query = $this->db->query("SELECT * FROM usuario u inner join perfil p on u.per_id=p.per_id");
        return $query->result();
    }
    
    //Funcion para eliminar
    public function deleteUsuario($id) {
        $this->db->where('usu_id',$id);
        $this->db->delete('usuario');
    }
    
    public function editUsuario($id) {
        $consulta = $this->db->query("SELECT * FROM usuario u inner join perfil p on u.per_id = p.per_id WHERE u.usu_id = $id");
        return $consulta->result();
    }
    
    public function updateUsuario($txtUsuid,$txtPerid,$txtNombres,$txtApellidos,$txtCorreo,$txtTelefono) {
        $array = array(
            'per_id' => $txtPerid,
            'usu_nombres' => $txtNombres,
            'usu_apellidos' => $txtApellidos,
            'usu_correo' => $txtCorreo,
            'usu_telefono' => $txtTelefono
        );
        $this->db->where('usu_id', $txtUsuid);
        $this->db->update('usuario', $array);
    }

}
