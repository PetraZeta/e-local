<?php include_once("plantilla/encabezado.php"); ?>
<div class="col-md-6 col-lg-7 d-flex  align-items-center">
    <div class="card-body px-4 p-lg-5 text-black">
        <h1 class="fw-bold text-center m-2">Lista de Productos</h1>
        <div class="card p-4 bg-light">
            <table class="table table-striped" width="100%" id="tablaProductos">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Modificar</th>
                        <th>Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($datos['data']); $i++) {
                        print "<tr>";
                        print "<td>" . $datos["data"][$i]["id"] . "</td>";
                        print "<td>" . $datos["data"][$i]["nombre"] . "</td>";
                        print "<td>" . $datos["data"][$i]["descripcion"] . "</td>";
                        print "<td><a href='" . RUTA . "admonProductos/cambio/" . $datos["data"][$i]["id"] . "' class='btn btn-info'>Modificar</a></td>";
                        print "<td><a href='" . RUTA . "admonProductos/baja/" . $datos["data"][$i]["id"] . "' class='btn btn-danger'>Borrar</a></td>";
                        print "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <a href="<?php print RUTA; ?>admonProductos/alta" class="btn btn-success">Dar de alta</a>
    </div>
    <?php include_once("plantilla/pie.php"); ?>