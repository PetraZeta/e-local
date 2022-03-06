<?php
//carpeta donde estan los archivos
//define("BASE_URL","http://jmlcasa.dyndns.info/~igarciaz01/");
//define("RUTA", "/home/igarciaz01/public_html/");
define("RUTA", $_SERVER['DOCUMENT_ROOT'] . "/e-local/");
define("BASE_URL", "http://localhost/e-local/");
define("DEFAULT_CONTROLLER", "Inicio");
//Vistas
define("VISTA", "app/vistas/");

//Modelos
define("MODELO", "app/modelos/");

//Controladores
define("CONTROLADOR", "app/controladores/");

//configuaracion de la bbdd
define("DB_HOST", "localhost");
//define("DB_USER", "igarciaz01");
define("DB_USER", "root");

//define("DB_PASS", "3992664");
define("DB_PASS", "");

//define("DB_NAME", "igarciaz01");
define("DB_NAME", "e-local");

//para el cifrado de las claves:
define("LLAVE", "unallavesecreta");
//cargar las clases iniciales
/* require_once("libs/BaseDatos.php");
require_once("libs/Controlador.php");
require_once("libs/Control.php"); */





?>