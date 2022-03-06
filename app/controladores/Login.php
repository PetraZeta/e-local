<?php
//controlador Login
class Login extends Controlador{
  //  private $modelo;

    function __construct()
    {
        // $this->modelo=$this->modelo("LoginModelo");
        parent::__construct();

    }
    public function index()
    {
        $this->cargaVista("plantilla/encabezado");
        $this->cargaVista("loginVista");
       // $this->cargaVista("admin/inicio_v");
        $this->cargaVista("plantilla/pie");
    }
    
    function caratula(){
        if(isset($_COOKIE["datos"])){
            $datos_array=explode("|",$_COOKIE["datos"]);
            $usuario=$datos_array[0];
            $clave=$datos_array[1];
           
            $data=[
                "usuario"=>$usuario,
                "clave"=>$clave,
                "recordar"=>"on"
            ];
        }else{
            $data=[];
        }
        $datos =[ 
            "titulo"=>"Login",
            "menu"=>false,
            "data"=>$data
            ];
        $this->cargaVista("loginVista", $datos);
    }
    function olvido(){
        //creamos un arreglo donde guardar los posible errores y otro para los datos
        $errores = array();
        $data = array();
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $email = isset($_POST["email"]) ? $_POST["email"] : "" ;
            //$data = [ "email" => $email ];
            if ($email == "") {
                array_push($errores, "El correo electrónico es obligatorio. <br>");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errores, "Formato de correo erroneo.<br>");
            }
            if(count($errores)==0){
                if($this->modelo->validarCorreo($email)){
                    array_push($errores, "Ese correo no existe en nuestra base de datos.");
                }else{
                    //pasa todas las validaciones y se le envia el correo, como solo funcionara en servidor externo, negamos temporalmente la condicion
                    if(!$this->modelo->enviarCorreo($email)){
                        //enviamos si obtiene algo en enviar correo
                        $datos = [
                            "titulo" => "Cambio de clave de acceso",
                            "menu" => false,
                            "errores" => [],
                            "data" => [],
                            "subtitulo" => "Cambio de clave de acceso",
                            "texto" => "Se ha enviado un correo a ".$email. " con las instrucciones para el cambio de contraseña. <br><br>No olvides revisar tu carpeta de spam.<br><br> Cualquier duda escribenos al correo: <a href='#'>info@e-local.es</a>  ",
                            "color" => "alert-success",
                            "url" => "login",   //sera redirigido a login
                            "colorBoton" => "btn-success",
                            "textoBoton" => "Volver"
                        ];
                        $this->cargaVista("mensajeVista", $datos);  
                    }else{
                        $datos = [
                        "titulo" => "Error en el envio del correo",
                        "menu" => false,
                        "errores" => [],
                        "data" => [],
                        "subtitulo" => "¡Oh, no!",
                        "texto" => "Ha ocurrido un error en el envio del correo <br><br> Por favor pruebe mas tarde o escribenos al correo: <a href='#'>info@e-local.es</a> ",
                        "color" => "alert-danger",
                        "url" => "login",   //sera redirigido a login
                        "colorBoton" => "btn-danger",
                        "textoBoton" => "Volver"
                        ];
                        $this->cargaVista("mensajeVista", $datos);  
                    }
                }
            }
        }else{
            $datos = [
                "titulo" => "Olvido de la contraseña",
                "menu" => false,
                "errores" => [],
                "data" => [],
                "subtitulo" => "¿Olvidaste tu contraseña?"
            ];
            $this->cargaVista("loginOlvidoVista", $datos);
        }
        if(count($errores)){
            $datos = [
                "titulo" => "Olvido de la contraseña",
                "menu" => false,
                "errores" => $errores,
                "subtitulo" => "¿Olvidaste tu contraseña?",
                "data" => []
            ];
            $this->cargaVista("loginOlvidoVista", $datos);
        }
    }
    function registro()
    { //creamos un arreglo donde guardar los posible errores y otro para los datos
        $errores=array();
        $data=array();
        //verifica que recibe los datos
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $nombre=isset($_POST["nombre"])?$_POST["nombre"]:"";
            $email = isset($_POST["email"]) ? $_POST["email"] : "";
            $clave1 = isset($_POST["clave1"]) ? $_POST["clave1"] : "";
            $clave2 = isset($_POST["clave2"]) ? $_POST["clave2"] : "";
            $direccion = isset($_POST["direccion"]) ? $_POST["direccion"] : "";
            //pasamos los valores al arreglo asociativo $data
            $data= [
                "nombre"=>$nombre,
                "email"=>$email,
                "clave1" => $clave1,
                "clave2" => $clave2,
                "direccion" => $direccion
            ];
            //Validacion
            if($nombre==""){
                array_push($errores, "El nombre es obligatorio");
            }
            if ($email == "") {
                array_push($errores, "El correo electrónico es obligatorio");
            }
            if ($clave1 == "") {
                array_push($errores, "La clave es obligatoria");
            }
            if ($clave2 == "") {
                array_push($errores, "Debes confirmar la clave de acceso");
            }
            if ($clave1 != $clave2) {
                array_push($errores, "Las claves no coinciden");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errores, "Formato de correo erroneo.");
            }
            if(count($errores)==0){
                //si no hay errores insertamos datos llamando a la funcion insertarRegistro
               // $r= $this->cargaModelo->insertarRegistro($data);
              //  if($r){
                    $datos = [
                        "titulo" => "¡Bienvenida a e-local!",
                        "menu" => false,
                        "errores" => [],
                        "data" => [],
                        "subtitulo"=> "¡Bienvenid@ a <b>e-local</b>!",
                        "texto"=> "Felicidades <b>$nombre</b>! <br> Ya eres miembro de la mejor comunidad de tiendas de tu ciudad. <br><br> En nombre de todas las tiendas que forman parte de esta gran familia te damos las gracias y deseamos que tengas la mejor experiencia de usuario. <br><br> E-local y sus tiendas quieren mimarte y ofrecerte lo mejor. <br><br> Gracias por registrarte. ",
                        "color"=>"alert-success",
                        "url"=>"menu",   //sera redirigido a menu
                        "colorBoton"=>"btn-success",
                        "textoBoton"=>"Iniciar"
                    ];
                    $this->cargaVista("mensajeVista", $datos);
        /*         }else{
                    $datos = [
                        "titulo" => "Error en el registro",
                        "menu" => false,
                        "errores" => [],
                        "data" => [],
                        "subtitulo" => "¡Oh, no!",
                        "texto" => "Ha ocurrido un error en el registro. <br><br>Posiblemente ya existe ese correo en nuestra base de datos. <br><br> Por favor, pruebe con otro correo o solicite modificar la clave. ",
                        "color" => "alert-danger",
                        "url" => "login",   //sera redirigido a login
                        "colorBoton" => "btn-danger",
                        "textoBoton" => "Volver"
                    ];
                    $this->cargaVista("mensajeVista", $datos);*/
                } 

/*             }else{
                $datos = [
                    "titulo" => "Registro usuario",
                    "menu" => false,
                    "errores"=>$errores,
                    "data"=>$data
                ];
                $this->cargaVista("loginRegistroVista", $datos);
            }*/
        }else{
            $datos = [
                "titulo" => "Registro usuario",
                "menu" => false
            ];
            $this->cargaVista("loginRegistroVista", $datos);
        }      
    } 
    function verifica()
    {
        $errores = array();
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
            $clave = isset($_POST["clave"])?$_POST["clave"]:"";
            $recordar = isset($_POST["recordar"])?"on":"off";
            $errores = $this->cargaModelo->verificar($usuario, $clave);
            //recuerdame
            $valor = $usuario."|".$clave;
        
            if($recordar=="on"){  
                $fecha=time()+(60*60*24*7); //fecha actual + 1 semana
            }else{
                $fecha=time() -1; //apaga la cookie 
            }
            setcookie("datos", $valor, $fecha,BASE_URL); //creo una cookie con los datos, caducidad y ruta
            //recibir datos
            $data=[
                "usuario" => $usuario,
                "clave"=>$clave,
                "recordar"=>$recordar
            ];
            //validar
            if (empty($errores)) {
                //si no hay errores, iniciamos sesion y enviamos a tienda
        //        $data=$this->modelo->getUsuarioCorreo($usuario);
                $sesion=new Sesion();
        //        $sesion->iniciarLogin($data);
                //
                header("Location: ".BASE_URL."tiendaVista");
            } else {
                $datos=[
                    "titulo" => "Login",
                    "menu" => false,
                    "errores" => $errores,
                    "data" => $data
                ];
                $this->cargaVista("loginVista", $datos);
            }
        }
      
    }
    function cambiaClave($data)
    {
        $errores=array();
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $id=isset($_POST["id"])?$_POST["id"]:"";
            $clave1=isset($_POST["clave1"])?$_POST["clave1"]:"";
            $clave2 = isset($_POST["clave2"]) ? $_POST["clave2"] : "";
            //validar
            if($clave1==""){
                array_push($errores, "Debes escribir una clave de acceso.");
            }
            if ($clave2 == "") {
                array_push($errores, "Debes confirmar la clave de acceso.");
            }
            if ($clave1 != $clave2) {
                array_push($errores, "Las claves de acceso no coinciden.");
            }
            if(count($errores)){
                $datos = [
                    "titulo" => "Cambia clave de acceso",
                    "menu" => false,
                    "errores"=>$errores,
                    "data" => $data
                ];
                $this->cargaVista("loginCambiaClaveVista", $datos);
            }else{
                //pasó todas las validaciones sin errores
                if($this->modelo->cambiarClaveAcceso($id,$clave1)){
                    $datos = [
                        "titulo" => "Modificar la clave de acceso",
                        "menu" => false,
                        "errores" => [],
                        "data" => [],
                        "subtitulo" => "Modificar la clave de acceso",
                        "texto" => "Se ha modificado la clave de acceso correctamente. <br><br> !Bienvenid@ de nuevo¡",
                        "color" => "alert-success",
                        "url" => "login",   //sera redirigido a login
                        "colorBoton" => "btn-success",
                        "textoBoton" => "Volver"
                    ];
                    $this->cargaVista("mensajeVista", $datos);
                }else{
                    $datos = [
                        "titulo" => "Error al modificar la clave de acceso",
                        "menu" => false,
                        "errores" => [],
                        "data" => [],
                        "subtitulo" => "¡Oh, no!",
                        "texto" => "Error al modificar la clave de acceso. <br><br> Vuelve a probar.",
                        "color" => "alert-danger",
                        "url" => "login",   //sera redirigido a login
                        "colorBoton" => "btn-danger",
                        "textoBoton" => "Volver"
                    ];
                   
                    $this->cargaVista("mensajeVista", $datos);
                }
            }
        }else{
            $datos = [
                "titulo" => "Cambia clave de acceso",
                "menu" => false,
                "data" => $data
            ];
            $this->cargaVista("loginCambiaClaveVista", $datos);
        }
    }
}
?>