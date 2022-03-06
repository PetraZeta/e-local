<?php
defined("BASEPATH") or die("No se permite la entrada directa a este script");

/* use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require ROOT . 'app/assets/libs/PHPMailer/src/Exception.php';
require ROOT . 'app/assets/libs/PHPMailer/src/PHPMailer.php';
require ROOT . 'app/assets/libs/PHPMailer/src/SMTP.php'; */

class Inicio extends Controlador
{

    public function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
        $vista = "inicioVista";    // Vista por defecto
      //  $menu = "plantilla/menuAdmon"; //menu por defecto
       // $articulos_m = $this->cargaModelo("AdmonProductosModelo");
      //  $data = $articulos_m->getProductos();
        if (isset($_SESSION['usuario'])) { // Si esta logueado
            if ($_SESSION['usuario']['rol'] == "0") { // Si es Admin
                $vista = "admonVista"; // Cargar vista administrador
                $menu = "plantilla/menuAdmon"; // Cargamos menu de administrador
            }
        }
      //  $this->cargaVista("plantilla/encabezado");
        //$this->cargaVista($menu);
        $this->cargaVista($vista);

      //  $this->cargaVista($vista, $data);
       // $this->cargaVista("plantilla/pie");
    }

  /*   public function login()
    {
        // Metodo que me presenta la pantalla de login
        $this->load_view("plantilla/cabecera");
        $this->load_view("plantilla/menu");
        $this->load_view("login_v");
        $this->load_view("plantilla/pie");
    }
    public function registro()
    {
        // Metodo que me presenta la pantalla de Registro al usuario
        $this->load_view("plantilla/cabecera");
        $this->load_view("plantilla/menu");
        $this->load_view("registro_v");
        $this->load_view("plantilla/pie");
    }
    public function insertarUsuario()
    {
        // Este metodo recibe los datos del registro y se los envia al modelo para registrar un nuevo usuario
        $usuarios_m = $this->load_model("Usuarios_m");
        // Antes de enviar el $_POST, encriptar la clave con password_hash
        $_POST['clave'] = password_hash($_POST['clave'], PASSWORD_DEFAULT);;
        // Creamos una entrada en $_POST con un hash para activar al usuario;
        $_POST['token'] = hash("md5", $_POST['email']);
        $usuarios_m->insertar($_POST);
        // Enviamos correo
        $mensaje = $this->enviarCorreo($_POST['token']);
        if ($mensaje) {
            echo "Error al enviar mensaje. Error $mensaje. Pulse <a href='" . BASE_URL . "Inicio/index'>aqui</a> para seguir";
        } else {
            // Volver al inicio
            header("location:" . BASE_URL);
        }
    }
    public function comprobarLogin()
    {
        // Comprobamos la autenticacion del usuario
     //   $usuarios_m = $this->load_model("Usuarios_m");
        $usuario = $usuarios_m->leerUsuarioExt($_POST['usuario']);
        if ($usuario) {
            if (!$usuario['activo']) {
                $datos['mensaje'] = "Usuario No activo. Ve a tu correo y haz click en el link de activación";
            } else {
                // Comprobar la contraseña
                if (password_verify($_POST['clave'], $usuario['clave'])) {
                    //Correcto
                    // Crear una variable de session con los datos del usuario que nos convengan para usar en cualquier sitio de la aplicacion
                    $_SESSION['usuario'] = [
                        "id" => $usuario['id'],
                        "nombre" => $usuario['usuario'],
                        "email" => $usuario['email'],
                        "role" => $usuario["role"]
                    ];
                    // redirigimos de nuevo a Inicio/index
                    header("location:" . BASE_URL . "Inicio/index");
                } else {
                    //Cargar de nuevo la vista de login e injectar datos con mensaje de error
                    $datos['mensaje'] = "Error.Contraseña no válida";
                }
            }
        } else {
            $datos['mensaje'] = "Error. Usuario no encontrado";
        }
        $this->cargaVista("plantilla/cabecera");
        $this->cargaVista("plantilla/menu");
        $this->cargaVista("login_v", $datos);
        $this->cargaVista("plantilla/pie");
    }

    public function logout()
    {
        session_destroy();
        header("location:" . BASE_URL . "Inicio/index");
    } */

/*     private function enviarCorreo($token = "")
    {
        //Creamos una instancia del PHPMailer; pasando `true` habilitamos las excepciones
        $mail = new PHPMailer(true);
        try {
            // Poner en Español
            $mail->setLanguage("es");
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'jmlabagora@gmail.com';                     //SMTP username
            $mail->Password   = 'tercoman2020?';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('jmlabagora@gmail.com', 'Jesus M Labrador');
            $mail->addAddress($_POST['email'], $_POST['usuario']);     //Add a recipient
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Registro en Tienda Online';
            $mail->Body    = '<h2>Enhorabuena</h2>.<p>Acabas de registrate en tu tienda de electrodomestios OnLINE</p><p>Haz click en el siguiente enlace para activar tu usuario</p><p><a href="' . BASE_URL . 'Inicio/activarUsuario/' . $token . '">' . BASE_URL . 'Inicio/activarUsuario</a></p>';
            $mail->AltBody = 'Enhorabuena.Acabas de reistrate en tu tienda de electrodomestios OnLINE';

            $mail->send();
            return false;   //Retornamos falso. No hay error
        } catch (Exception $e) {
            return "{$mail->ErrorInfo}"; // Hay error.
        }
    } */
/*     public function activarUsuario($token)
    {
        //cargar modelo
        $usuarios_m = $this->load_model("Usuarios_m");
        $activo = $usuarios_m->activarUsuario($token[0]);
        if ($activo) {
            header("location:" . BASE_URL . "Inicio/login");
        } else {
            echo "Error al activar usuario.<a href='" . BASE_URL . "'>Ir al Inicio</a>";
        }
    } */
  /*   public function comprobarDatosRegistroAjax()
    {
        //cargar modelo
        $usuarios_m = $this->("Usuarios_m");
        // Vamos a recibir un parameto que puede ser usuario o email
        $usuario = $usuarios_m->leerUsuarioExt($_POST['usuemail']);
        if ($usuario) {
            // EL usuario existe
            echo "1";
        } else {
            echo "0";
        }
    } */
}
