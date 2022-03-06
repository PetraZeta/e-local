<?php
//manejo de la base de datos MySQL
class BaseDatos{
    private $host=DB_HOST;
    private $usuario= DB_USER;
    private $clave = DB_PASS; //
    private $db = DB_NAME;
    private $puerto = ""; //MAMP en windows necesitamos el puerto 
    private $conn;

    function __construct()
    {
        $this->conn=mysqli_connect(
            $this->host, 
            $this->usuario,
            $this->clave,
            $this->db);

            if(mysqli_connect_errno()){
                printf("error al conectar %s", mysqli_connect_errno() );
                exit();
            }else{
               // print "conexion ok";
            }
            if(!mysqli_set_charset($this->conn, "utf8")){
            printf("error al convertir caracteres %s", mysqli_connect_error());
            exit();
            }else{
            //printf("el conjunto de caracteres es %s", mysqli_character_set_name($this->conn));
            }
    }
//funcion consulta que devuelve un solo valor
    public function query($sql){
        $data=array();
        $r=mysqli_query($this->conn, $sql);
        if(mysqli_num_rows($r)>0){
            $data=mysqli_fetch_assoc($r);
        }
        return $data;
    }
    //funcion consulta que devuelve un valor booleano
    public function queryNoSelect($sql)
    {
        $r = mysqli_query($this->conn, $sql);
        return $r;
    }
   public function querySelect($sql)
    {
        $data = array();
        $r = mysqli_query($this->conn, $sql);
        if ($r) {
            while ($row = mysqli_fetch_assoc($r)) {
                array_push($data, $row);
            }
        }
        return $data;
    }
    
}

?>
