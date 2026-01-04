
<?php 

if(!empty($_POST["btmodificar"])){
        if(!empty($_POST["nombre"]) and !empty($_POST["marca"]) and !empty($_POST["cantidad"]) ){
            
            $id = $_POST["id"];
            $nombre = $conexion->real_escape_string($_POST["nombre"]);
            $marca = $conexion->real_escape_string($_POST["marca"]);
            $cantidad = intval($_POST["cantidad"]); // Forzamos a que sea un número entero

            $resultado = $conexion->query("UPDATE inventario SET nombre = '$nombre', marca = '$marca', cantidad = $cantidad WHERE id= $id");

            //validamos si quedó registrado
            if ($resultado){
                echo '<div  id="alerta" class="alert alert-success text-center">Producto actualizado</div>';
            }else{
                echo '<div  id="alerta" class="alert alert-danger text-center">Error al modificar</div>';
            }
            
        }else{
            echo '<div id="alerta" class="alert alert-warning text-center" >Por favor, ingrese todos los campos</div>';
        }
}

?>