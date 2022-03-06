<?php
require_once("app/inicio.php");
//va a controloar segun la URL las clases y metodos a cargar
spl_autoload_register(function ($clase) {
    if (is_file("app/libs/" . $clase . ".php")) {
        include "app/libs/" . $clase . '.php';
    }
});
if (session_id() === "") session_start();
define("BASEPATH", true);
$control = new Control();

$controlador = $control->getController();
$metodo = $control->getMethod();
$parametros = $control->getParams();

// Cmprobar que el controlador exista
if (!is_file(CONTROLADOR . $controlador . ".php")) $controlador = "PaginaError";
// Cargar el controlador escrito en la URI
include CONTROLADOR . $controlador . ".php";

// Instanciamos el controlador de la URI
$miControlador = new $controlador();

// Comprobar que esa clase controladora tenga el metodo que se quiere ejecutar

if (!method_exists($controlador, $metodo)) $metodo = "index";

// Ejecutamos metodo de la URI
if (empty($parametros)) {
    $miControlador->$metodo();
} else {
    $miControlador->$metodo($parametros);
}
?>