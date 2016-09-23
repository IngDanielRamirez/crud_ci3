<?php
//CREACION DE CONTROLADOR PARA LA VISTA USUARIO

class Usuario extends CI_Controller {   //La clase se debe de llamar igual que el archivo

    function __construct() {
        parent::__construct();
        //Comunicacion con el modelo para este controlador, segun el patron MVC "comunicacion controlador con el modelo
        $this->load->model('Model_Usuario');
    }
    
    //Enviar a plantilla la vista index de usuario
    public function index() { // este se llama index, por que tiene que tener el mismo nombre que el de la vista que quiero asociar, la cual es view/usuario/index.php
        $data['contenido'] = "usuario/index"; // arreglo de datos que contendra el directorio de la vista index, lo que envia a plantilla la vista index de usuario
        $data['selPerfil'] = $this->Model_Usuario->selPerfil();
        $data['listaUsuario'] = $this->Model_Usuario->listUsuario();
        $this->load->view("plantilla", $data); 
        /*Como parametro va el nombre de la vista, pero como se creo una plantilla,
         *la pongo como referencia ya que es el master page "plantilla" y le mando 
         * los datos del array data en el cual se tiene los datos de la vista index de usuario
         */        
    }
    
    public function insert() {
        $datos = $this->input->post(); //recupero los datos del formulario que fue enviado por el metodo POST
        
        if(isset($datos)){  //Verifico que la variable datos no este vacia
            //Recupero cada uno de los datos capturados en el formulario almacenadolos en una variable 
            $txtId = $datos['txtIdper'];
            $txtNombres = $datos['txtNombres'];
            $txtApellidos = $datos['txtApellidos'];
            $txtCorreo = $datos['txtCorreo'];
            $txtTelefono = $datos['txtTelefono'];
            //estos datos se los mando al modelo, utilizando el modelo insertUsuario que hara el query
            //correspondiente para inserta un usuario a la BD.
            $this->Model_Usuario->insertUsuario($txtId,$txtNombres,$txtApellidos,$txtCorreo,$txtTelefono);
            redirect('');
        }
        
    }
    
    public function delete($id = NULL) {
        if($id != NULL){
            $this->Model_Usuario->deleteUsuario($id);
            redirect('');
        }
        
    }
    
    public function edit($id = NULL) {
        if($id != NULL){
            //mostrar datos
            $data['contenido'] = 'usuario/edit';
            $data['selPerfil'] = $this->Model_Usuario->selPerfil();
            $data['datosUsuario'] = $this->Model_Usuario->editUsuario($id);
            $this->load->view('plantilla', $data);
            
        }  else {
            //regresar a index enviar parametros
            redirect('');
        }
        
    }
    
    public function update() {
        $datos = $this->input->post();
        
        if(isset($datos)){
            $txtUsuid = $datos['txtUsuid'];
            $txtPerid = $datos['txtPerid'];
            $txtNombres = $datos['txtNombres'];
            $txtApellidos = $datos['txtApellidos'];
            $txtCorreo = $datos['txtCorreo'];
            $txtTelefono = $datos['txtTelefono'];
            $this->Model_Usuario->updateUsuario($txtUsuid,$txtPerid,$txtNombres,$txtApellidos,$txtCorreo,$txtTelefono);
            redirect('');
        }
        
    }

}