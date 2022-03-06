<?php include_once("plantilla/encabezado.php"); ?>

<nav class="navbar navbar-expend-sm bg-dark navbar-dark">
    <a href="<?php print RUTA; ?>" class="navbar-brand" >Logo</a>
    <div class="collapse navbar-collapse" id="menu">
    <?php if($datos["menu"]){

    }
    if(isset($datos["admon"])){
        if($datos["admon"]){
            print "<ul class='navbar-nav mr-auto mt-2 mt-lg-0'>";
            print "<li class='navbar-item'>";
            print "<a href='".BASE_URL."admonProductos' class='nav-link'>Productos</a>";
            print "</li>";
            print "</ul>";

        }
    }
    ?>
    </div>
</nav>


<?php include_once("plantilla/pie.php"); ?>