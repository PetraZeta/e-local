<?php

class AdmonProductosModelo {
    private $db;

    function __construct()
    {
      //  parent::__construct();
        $this->db = new BaseDatos();
    
    }
    public function getProductos(){
        $sql="SELECT * FROM producto";
        $data=$this->db->querySelect($sql);
        return $data;
    }
    public function getProductoId($id)
    {
        $sql = "SELECT * FROM producto WHERE id=".$id;
        $data = $this->db->query($sql);
        return $data;
    }
 /*    public function bajaLogica($id){
        $errores=array();
        $sql="UPDATE admon"
    } */
    public function modificaProducto($data){
        $errores=array();
      /*   $sql="UPDATE productos SET ";
        $sql.= "nombre='.$data["nombre"]."',";
        $sql. = "UPDATE productos SET ";
        $sql = "UPDATE productos SET "; */
        return $errores;

    }
    
}
