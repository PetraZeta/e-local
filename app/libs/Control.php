<?php
//Control que maneja la URL y lanza los procesos
class Control{
    /*     protected $controlador="Admon";
    protected $metodo ="caratula";
    protected $parametros= [];

    function __construct()
    {
        $url= $this->separarURL();
      
        //ucwords para Unix y Linux 
        if($url!="" && file_exists(CONTROLADOR.ucwords($url[0]).".php")){
            $this->controlador=ucwords($url[0]);
            unset($url[0]);
           
        }
        //cargar clase controlador
        require_once(CONTROLADOR.ucwords($this->controlador).".php");
        //instanciar clase controlador
        $this->controlador=new $this->controlador;

        if(isset($url[1])){
            if(method_exists($this->controlador, $url[1])){
                $this->metodo=$url[1];
                unset($url[1]);
            }
        }
        //si url tienen elementos nos redirige, si no le asignamos arreglo vacio 
        $this->parametros=$url ? array_values($url):[];
        call_user_func_array([$this->controlador,$this->metodo], $this->parametros);
    }

    function separarURL(){
        $url="";
        if(isset($_GET["url"])){
            //eliminamos caracter final (si existe)
            $url=rtrim($_GET["url"], "/");
            $url = rtrim($_GET["url"], "\\");
            //limpiar caracteres raros
            $url=filter_var($url, FILTER_SANITIZE_URL);
            //separamos 
            $url=explode("/", $url);

        }
        return $url;
    } */
    private $uri; // Array que contiene las diferentes partes de la URI
    private $controller;
    private $method;
    private $params; // Parametros pasados en la URI

    public function __construct()
    {
        $this->setUri();
        $this->setController();
        $this->setMethod();
        $this->setParams();
    }

    ////////////// Metodos Setters
    public function setUri()
    {
        $this->uri = explode("/", $_SERVER['REQUEST_URI']);
    }
    public function setController()
    {
        $this->controller = $this->uri[2] == "" ? DEFAULT_CONTROLLER : $this->uri[2];
    }
    public function setMethod()
    {
        $this->method = empty($this->uri[3]) ? "index" : $this->uri[3];
    }
    public function setParams()
    {
        /* if ($_SERVER['REQUEST_METHOD']==="POST"){
            $this->param=$_POST;
        } else {
            $this->param=!isset($this->uri[4]) ? "" : $this->uri[4];
        } */
        for ($ind = 4; $ind < count($this->uri); $ind++) {
            $this->params[] = !isset($this->uri[$ind]) ? "" : $this->uri[$ind];
        }
    }
    ///////////////// Metodos Getters
    public function getUri()
    {
        return $this->uri;
    }
    public function getController()
    {
        return $this->controller;
    }
    public function getMethod()
    {
        return $this->method;
    }
    public function getParams()
    {
        return $this->params;
    }
}