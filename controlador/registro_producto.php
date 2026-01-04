<?php

    if(!empty($_POST["btProducto"])){
        if(!empty($_POST["nombre"]) and !empty($_POST["marca"]) and !empty($_POST["cantidad"]) ){
            
        $nombre = $conexion->real_escape_string($_POST["nombre"]);
        $marca = $conexion->real_escape_string($_POST["marca"]);
        $cantidad = intval($_POST["cantidad"]); // Forzamos a que sea un número entero

            $sql = $conexion->query("insert into inventario( nombre, marca, cantidad, activo) VALUES ('$nombre','$marca',$cantidad, 1)");

            //validamos si está registrado
            if ($sql==1){
                echo '<div  id="alerta" class="alert alert-success text-center">Perfecto, Producto registrado</div>';
            }else{
                echo '<div  id="alerta" class="alert alert-danger text-center">Error al registrar</div>';
            }
            
        }else{
            echo '<div id="alerta" class="alert alert-warning text-center" >Por favor, ingrese todos los campos</div>';
        }
    }

?>