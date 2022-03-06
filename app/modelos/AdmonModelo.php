<?php

class AdmonModelo{
    private $db;

    function __construct()
    {
        $this->db=new BaseDatos();
    }

    public function verificaAdmon($data){
        $errores=array();

        $clave=hash_hmac("sha512", $data['clave'], LLAVE);
        $sql="SELECT id, clave FROM usuario WHERE email='".$data['usuario']."' AND rol=1";
        $data=$this->db->query($sql);

        if(empty($data)){
            array_push($errores, "No existe ningun administrador con ese nombre");
        }else if($clave!=$data['clave']){
            array_push($errores, "La clave de acceso no es correcta.");

        }
        return $errores;
    }
}

?>