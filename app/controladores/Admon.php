<?php
class Admon extends Controlador
{

    function __construct()
    {
        // $this->modelo = $this->modelo("AdmonModelo");
        parent::__construct();
    }
    public function index()
    {
        $vista = "admonVista";    // Vista por defecto
        //  $menu = "plantilla/menuAdmon"; //menu por defecto
        $articulos_m = $this->cargaModelo("AdmonProductosModelo");
        //  $data = $articulos_m->getProductos();
        if (isset($_SESSION['usuario'])) { // Si esta logueado
            if ($_SESSION['usuario']['rol'] == "0") { // Si es Admin
                $vista = "admonProductosVista"; // Cargar vista administrador
                $menu = "plantilla/menuAdmon"; // Cargamos menu de administrador
            }
        }
        //  $this->cargaVista("plantilla/encabezado");
        //$this->cargaVista($menu);
        $this->cargaVista($vista);

        //  $this->cargaVista($vista, $data);
        // $this->cargaVista("plantilla/pie");
    }
    public function caratula()
    {
        $datos = [
            "titulo" => "Administrativo",
            "menu" => false,
            "data" => []
        ];
        $this->cargaVista("admonVista", $datos);
    }
    public function verifica()
    {
        //Inicio arreglos
        $errores = array();
        $data = array();

        //Recibimos los datos de la vista
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            //Limpiamos de datos
            $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : "";
            $clave = isset($_POST['clave']) ? $_POST['clave'] : "";

            //Validaciones (por si el navegador no reconoce el atributo required)
            if (empty($usuario)) {
                array_push($errores, "Escriba su correo electronico.");
            }
            if (empty($clave)) {
                array_push($errores, "Escriba la clave asignada.");
            }
            $data = [
                "usuario" => $usuario,
                "clave" => $clave
            ];

            if (empty($errores)) {
                $errores = $this->modelo->verificaAdmon($data);
                //doble verificacion
                if (empty($errores)) {
                    //si no hay errores crear la sesion
                    $sesion = new Sesion();
                    $sesion->iniciarLogin($data);
                    //abrir inicio administrador
                    header("Location:".RUTA."admonInicio");
                }
            }
        }

        $datos = [
            "titulo" => "Administrativo",
            "menu" => false,
            "admon" => true,
            "errores" => $errores,
            "data" => []
        ];
        $this->cargaVista("admonVista", $datos);
    }
}
