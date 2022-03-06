<?php

//Verificar si vienen errores por get y mostrarlos
if (isset($datos["errores"])) {
    if (count($datos["errores"]) > 0) {
        echo "<div class='alert alert-danger text-center'>";
        foreach ($datos["errores"] as $key => $valor) {
            echo "<strong>* " . $valor . "</strong><br>";
        }
        echo "</div>";
    }
}
?>