<?php


class LoginModelo{
    private $db;

    function __construct()
    {
        $this->db=new BaseDatos();
    }
    function insertarRegistro($data){
        $r=false; 
        //verificar que el correo no exite en la bbdd
        if($this->validarCorreo($data["email"])){
            //una vez validado que no existe el mismo correo, encripto la clave
            $clave=hash_hmac("sha512", $data["clave1"], "unallavesecreta");
            $sql="INSERT INTO usuario VALUES(0, ";
            $sql .= "'" .$clave. "', ";
            $sql .= "'" .$data["email"]. "', ";
            $sql.="'".$data["nombre"]."', ";
            $sql .= "'" .$data["direccion"]. "', 1);";
             //rol usuario

            $r= $this->db->queryNoSelect($sql);
        }
        return $r; //resultado del insert
    }
    function cambiarClaveAcceso($id, $clave)
    {
        $r = false;
        $clave = hash_hmac("sha512", $clave, "unallavesecreta");
        $sql = "UPDATE usuario SET  clave='".$clave."' WHERE id='".$id. "'";
        $r = $this->db->queryNoSelect($sql);
        return $r; //resultado del insert
        
    }
    function validarCorreo($email){
        var_dump($email);
        $sql="SELECT * FROM usuario WHERE email='".$email."'";
        $data = $this->db->query($sql);
        return (count($data)==0)?true:false;
    }
    function getUsuarioCorreo($email)
    {
        $sql = "SELECT * FROM usuario WHERE email='".$email."'";
        $data = $this->db->query($sql);
        return $data;
    }
    function verificar($usuario, $clave){
        $errores=array();
        $sql = "SELECT * FROM usuario WHERE email='".$usuario."'";
        $clave=hash_hmac("sha512",$clave,'unallavesecreta');
        $clave=substr($clave,0,255); 
        //ejecuto consulta y guardo el resultado
        $data=$this->db->query($sql);
        //validacion
        if(empty($data)){
            array_push($errores, "No existe ningun usuario con ese correo.");
        }elseif($clave!=$data["clave"]){
            array_push($errores, "Mal! Esa no es la clave de acceso.");
        }
        return $errores;
    }
    function enviarCorreo($email){
        //necesitamos el id del usuario 
        $data=$this->getUsuarioCorreo($email);
        $id=$data["id"];
        $nombre = $data["nombre"];
        $msg= $nombre.", haz click en el enlace para cambiar tu clave de acceso a e-local <br>";
        $msg.="<a href='".RUTA."/login/cambiaClave/".$id."'>Cambia tu contraseña</a>";
//esto solo funcionara en servidores externos, no en local
        $headers= "MIME-Version:1.0\r\n";
        $headers .= "Content-type:text/html; charset=UTF-8 \r\n";
        $headers .= "From: e-local\r\n";
        $headers = "Repaly-to: $email\r\n";

        $asunto="Cambiar clave de acceso";
//@ quita el mensaje de warning que da si ejecuto en local
        return @mail($email, $asunto,$msg, $headers);


    } 
}



?>