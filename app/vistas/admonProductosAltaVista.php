<?php include_once("plantilla/encabezado.php"); ?>
<h1 class="fw-bold text-center ">Administración.</h1><br>
<h3 class="fw-light text-center">Añadir Nuevos Productos</h3>
<div class="row">
    <?php include_once("plantilla/errores.php"); ?>
    <form action="<?php print RUTA; ?>admonProductos/alta/" method="POST">
        <div class="row ">
            <div class="col-6">
                <label for="tienda"></label>
                <select class="form-control" id="tienda" name="tienda">
                    <option value="Tienda">Nombre de la tienda</option>
                    <?php
                    for ($i = 0; $i < count($datos["tienda"]); $i++) {
                        print "<option value='" . $datos["tienda"][$i]["id"] . "'";
                        print ">" . $datos["tienda"][$i]["nombre"] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-6">
                <label for="marca"></label>
                <select class="form-control" id="marca" name="marca">
                    <option value="Marca">Marca del producto</option>
                    <?php
                    for ($i = 0; $i < count($datos["marca"]); $i++) {
                        print "<option value='" . $datos["marca"][$i]["id"] . "'";
                        print ">" . $datos["marca"][$i]["nombre"] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-12 ">
                <label for="nombre"></label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre del producto" name="nombre" value='<?php isset($datos["data"]["nombre"]) ? print $datos["data"]["nombre"] : ""; ?>' required>
            </div>
            <div class="col-12">
                <label for="descripcion"></label>
                <input type="text" class="form-control" id="descripcion" placeholder="Descripción" name="descripcion" value='<?php isset($datos["data"]["descripcion"]) ? print $datos["data"]["descripcion"] : ""; ?>' required>
            </div>
            <div class="col-6">
                <label for="precio"></label>
                <input type="number" class="form-control" id="precio" placeholder="Precio" step=".01" name="precio" value='<?php isset($datos["data"]["precio"]) ? print $datos["data"]["precio"] : ""; ?>' required>
            </div>
            <div class="col-6">
                <label for="stock"></label>
                <input type="number" class="form-control" id="stock" placeholder="Stock" name="stock" value='<?php isset($datos["data"]["stock"]) ? print $datos["data"]["stock"] : ""; ?>' required>
            </div>
            <div class="col-6">
                <label for="Categoria"></label>
                <select class="form-control" id="categoria" name="categoria">
                    <option value="categoria">Categoria</option>
                    <option value="R">Ropa</option>
                    <option value="Z">Calzado</option>
                    <option value="C">Complementos</option>
                </select>
            </div>
            <div class="col-6">
                <label for="Categoria"></label>
                <select class="form-control" id="genero" placeholder="Genero" name="genero">
                    <option value="Genero">Género</option>
                    <option value="X">Unisex</option>
                    <option value="M">Mujer</option>
                    <option value="H">Hombre</option>
                </select>
            </div>
            <div class="col-12">
                <label for="imagen"></label>
                <input type="file" class="form-control" name="imagen" accept="image/jpeg" <?php
                                                                                            if (isset($datos["baja"])) {
                                                                                                print " disabled ";
                                                                                            }
                                                                                            ?>>
                <?php
                if (isset($datos['data']['imagen'])) {
                    print "<p>" . $datos['data']['imagen'] . "</p>";
                }
                ?>
            </div>
            <!--     <div class="col-12">
                <label for="catalogo"></label>
                <select class="form-control" id="catalogo" name="catalogo">
                    <option value="Catalogo">Catalogo de productos</option>
                    <?php
                    for ($i = 0; $i < count($datos["producto"]); $i++) {
                        print "<option value='" . $datos["producto"][$i]["id"] . "'";
                        print ">" . $datos["producto"][$i]["nombre"] . "</option>";
                    }
                    ?>
                </select>
            </div> -->
            <div class="form-group row pt-1 my-1 justify-content-md-center">
                <input type="submit" class="col-5 btn btn-dark btn-lg  " value="Dar de alta"><br>
                <a href="<?php print RUTA; ?>admonProductos" class="col-5 btn btn-dark btn-lg mx-4 ">Volver</a>
                <p class=" small text-muted mb-0 " style="color: #393f81;">¿No eres administrador? <a href="<?php print RUTA; ?>index/" style="color: #393f81;">Salir</a></p>
            </div>
    </form>

    <?php include_once("plantilla/pie.php"); ?>