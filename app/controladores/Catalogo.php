<?php
class Catalogo extends Controlador
{

    private $productos; 
   //private $articulos_m; // Propiedad privada objeto modelo articulos

    public function __construct()
    {
        parent::__construct();
        $this->productos = $this->cargaModelo("AdmonProductosModelo");
        //$this->articulos_m = $this->cargaModelo("Articulos_m");
    }

    public function index($parametros = [])
    {
        // Si se paran parametros el primero es la familia para filtrar el catalogo
        $fam = isset($parametros[0]) ? $parametros[0] : "%%";
        // Cargar Datos para select familias
        $datos['parametros'] = $parametros; // Pasar parametros a la vista
        $datos['productos'] = $this->productos->getProductos();
      //  $datos['articulos'] = $this->articulos_m->articulosCat($fam);
        $this->cargaVista("plantilla/encabezado");
        $this->cargaVista("menuVista");
        $this->cargaVista("catalogoVista", $datos);
        $this->cargaVista("plantilla/pie");
    }
/*     public function indexAjax()
    {
        // Cargar Datos para select familias
        $datos['familias'] = $this->familias_m->leerTodas();
        //$datos['articulos']=$this->articulos_m->articulosCat($fam);
        $this->load_view("plantilla/cabecera");
        $this->load_view("plantilla/menu");
        $this->load_view("catalogoAjax_v", $datos);
        $this->load_view("plantilla/pie");
    } */
   /*  public function genCatalogo()
    {
        // Ver si se ha pasado familia o no
        $fam = isset($_POST['familia']) ? $_POST['familia'] : "%%";
        $query = isset($_POST['query']) ? $_POST['query'] : "%%";
        // Obtener los articulos
        $articulos = $this->articulos_m->articulosCat($fam, $query);
        foreach ($articulos as $art) { ?>
            <div class="col-3 mb-2">
                <!--  Fichas de nuestros articulos -->
                <div class="card">
                    <img src="<? echo BASE_URL . $art['camino']; ?>" class="card-img-top" alt="<? echo $art['descripCorta'];  ?>">
                    <div class="card-body d-flex justify-content-center flex-column align-items-center">
                        <h5 class="card-title">P.V.P: <? echo $art['precioVenta']; ?>€</h5>
                        <p class="card-text"><? echo $art['descripCorta']; ?></p>
                        <button data-referencia="<? echo $art['referencia']; ?>" class="btn btn-primary btnCompra">Comprar</button>
                    </div>
                </div>
            </div>
<?php
        }
    } */
}
