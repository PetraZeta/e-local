<?php
defined("BASEPATH") or die("No se permite acceso directo");
class PaginaError extends Controlador
{

    public function __construct()
    {
    }

    public function index()
    {
        $this->cargaVista("paginaError");
    }
}
