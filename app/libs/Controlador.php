<?php


abstract class Controlador{
    /*public function __construct()
    {
    }
     public function modelo($modelo){
        require_once(MODELO.$modelo.".php");
        //llamada a la clase de forma dinamica
        return new $modelo();

    }
    public function vista($vista, $datos=[]){
        if(file_exists(VISTA.$vista.".php")){
            require_once(VISTA . $vista . ".php");
        }else{
            die("La vista no existe...");
        }
    } */
    private $vista;

    public function __construct()
    {
    }
    
    protected function cargaVista($vista = "", $params = array())
    {
        $this->vista = new Vista($vista, $params);
    }

    protected function cargaModelo($modelo)
    {
        $path_model = RUTA . MODELO . $modelo . ".php";
        if (is_file($path_model)) {
            include $path_model;
            return new $modelo;
        } else {
            throw new Exception("El modelo no existe");
        }
    }

    abstract public function index();
}

?>