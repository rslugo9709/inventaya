
<?php 
    if(!empty($_GET["id"])){

        $id = $_GET["id"];
        $eliminar = $conexion->query("UPDATE inventario SET activo = 0 WHERE id= $id");
            if ($eliminar){
                echo '<div  id="alerta" class="alert alert-success text-center">Producto Eliminado</div>';
            }else{
                echo '<div  id="alerta" class="alert alert-danger text-center">Error al eliminar</div>';
            }
    }

?>