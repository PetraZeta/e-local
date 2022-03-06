<?php
class AdmonProductos extends Controlador{
    private $modelo;
    
    function __construct()
    {
        parent::__construct();

       // $this->modelo=$this->modelo("AdmonProductosModelo");
    }
    public function index()
    {
        $vista = "inicioVista";    // Vista por defecto
        //  $menu = "plantilla/menu"; //menu por defecto
        $articulos_m = $this->cargaModelo("AdmonProductosModelo");
        $datos['artOferta'] = $articulos_m->getProductos();
        if (isset($_SESSION['usuario'])) { // Si esta logueado
            if ($_SESSION['usuario']['rol'] == "0") { // Si es Admin
                $vista = "admonInicioVista"; // Cargar vista administrador
                //$menu = "admin/menu"; // Cargamos menu de administrador
            }
        }
        $this->cargaVista("plantilla/cabecera");
        // $this->cargaVista($menu);
        $this->cargaVista($vista, $datos);
        $this->cargaVista("plantilla/pie");
    }

    public function caratula(){
        //creamos sesion
        $sesion= new Sesion();
        if($sesion->getLogin()){
            $data=$this->modelo->getProductos();

            $datos = [
                "titulo" => "Administrativo Productos",
                "menu" => false,
                "admon" => true,
                "data" => $data
            ];
            $this->cargaVista("admonProductosCaratulaVista", $datos);
        }else{
            header("Location:".RUTA."admon");

        }

        $datos=[
            "titulo"=>"Administrativo Productos",
            "menu"=>"false",
            "admon" => "true", 
            "data"=>[]
        ];
        $this->cargaVista("admonProductosCaratulaVista", $datos);
    }

    public function alta(){
        $datos=[
            "titulo"=> "Administrativo Alta Productos",
            "menu" => "false",
            "admon"=>"true", 
            "data"=>[]
        ];
        $this->cargaVista("admonProductosVista", $datos);
    }
    public function baja()
    {
 /*        $datos = [
            "titulo" => "Administrativo Alta Productos",
            "menu" => "false",
            "admon" => "true",
            "data" => []
        ];
        $this->vista("admonProductosVista", $datos); */
        print "Usuarios admon baja";
    }
    public function cambio()
    {
        /*        $datos = [
            "titulo" => "Administrativo Alta Productos",
            "menu" => "false",
            "admon" => "true",
            "data" => []
        ];
        $this->vista("admonProductosVista", $datos); */
        print "Usuarios admon cambio";
    }
}
